<?php

namespace Tests\Feature;

use App\Models\ContactInquiry;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\RateLimiter;
use Tests\TestCase;

class ContactSecurityTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        // Fake mail delivery so we don't attempt to send real emails during testing
        Mail::fake();
    }

    /**
     * Test that valid contact inquiry submission is saved to the database 
     * and triggers email delivery.
     */
    public function test_valid_contact_submission_succeeds(): void
    {
        $payload = [
            'full_name' => "John O'Connor-Smith Jr.",
            'email' => 'john.doe@example.com',
            'phone' => '+1 (555) 123-4567',
            'service' => 'book-writing',
            'message' => 'This is a valid test message with at least ten characters.',
        ];

        $response = $this->post(route('contact.store'), $payload);

        $response->assertRedirect();
        $response->assertSessionHas('success');

        // Check if stored in database
        $this->assertDatabaseHas('contact_inquiries', [
            'full_name' => "John O'Connor-Smith Jr.",
            'email' => 'john.doe@example.com',
            'phone' => '+1 (555) 123-4567',
            'service' => 'book-writing',
            'message' => 'This is a valid test message with at least ten characters.',
        ]);
    }

    /**
     * Test that invalid names containing symbols, HTML tags, or script markers are rejected.
     */
    public function test_invalid_name_is_rejected(): void
    {
        $payloads = [
            ['full_name' => 'John <script>'],
            ['full_name' => 'John 123'],
            ['full_name' => 'John; SELECT'],
        ];

        foreach ($payloads as $badPayload) {
            $payload = array_merge([
                'full_name' => '',
                'email' => 'john.doe@example.com',
                'phone' => '+1 (555) 123-4567',
                'service' => 'book-writing',
                'message' => 'This is a valid test message with at least ten characters.',
            ], $badPayload);

            $response = $this->post(route('contact.store'), $payload);
            $response->assertSessionHasErrors('full_name');
            $this->assertDatabaseEmpty('contact_inquiries');
        }
    }

    /**
     * Test that invalid phone formats are blocked.
     */
    public function test_invalid_phone_is_rejected(): void
    {
        $payloads = [
            ['phone' => '123-4567-abc'],
            ['phone' => 'phone; DROP TABLE'],
            ['phone' => '<script>'],
        ];

        foreach ($payloads as $badPayload) {
            $payload = array_merge([
                'full_name' => 'John Doe',
                'email' => 'john.doe@example.com',
                'phone' => '',
                'service' => 'book-writing',
                'message' => 'This is a valid test message with at least ten characters.',
            ], $badPayload);

            $response = $this->post(route('contact.store'), $payload);
            $response->assertSessionHasErrors('phone');
            $this->assertDatabaseEmpty('contact_inquiries');
        }
    }

    /**
     * Test that invalid service slug is whitelisted out and rejected.
     */
    public function test_invalid_service_slug_is_rejected(): void
    {
        $payload = [
            'full_name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'phone' => '+1 (555) 123-4567',
            'service' => 'non-existent-service-slug-traversal',
            'message' => 'This is a valid test message with at least ten characters.',
        ];

        $response = $this->post(route('contact.store'), $payload);
        $response->assertSessionHasErrors('service');
        $this->assertDatabaseEmpty('contact_inquiries');
    }

    /**
     * Test XSS Sanitization: verify HTML tags in message are stripped out.
     */
    public function test_xss_sanitization_strips_html_tags(): void
    {
        $payload = [
            'full_name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'phone' => '+1 (555) 123-4567',
            'service' => 'book-writing',
            'message' => '<p>Hello!</p><script>alert("XSS")</script> This is a secure message.<b>End</b>',
        ];

        $response = $this->post(route('contact.store'), $payload);

        $response->assertRedirect();
        
        // Check that HTML tags have been stripped in database
        $this->assertDatabaseHas('contact_inquiries', [
            'message' => 'Hello!alert("XSS") This is a secure message.End',
        ]);
    }

    /**
     * Test SQL Injection: Verify SQL injection patterns are stored safely as literals
     * without compromising query structure.
     */
    public function test_sql_injection_payload_is_treated_as_literal_text(): void
    {
        // This input resembles an SQL Injection string
        $sqlPayload = "admin' OR '1'='1' --";

        $payload = [
            'full_name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'phone' => '+1 (555) 123-4567',
            'service' => 'book-writing',
            'message' => 'My message has SQL injection: ' . $sqlPayload,
        ];

        $response = $this->post(route('contact.store'), $payload);
        $response->assertRedirect();

        // Verify it is saved exactly as a literal string.
        $this->assertDatabaseHas('contact_inquiries', [
            'message' => 'My message has SQL injection: ' . $sqlPayload,
        ]);
        
        $inquiry = ContactInquiry::first();
        $this->assertEquals('My message has SQL injection: ' . $sqlPayload, $inquiry->message);
    }

    /**
     * Test Route Rate Limiting (Throttling) blocks excessive POST requests.
     */
    public function test_contact_route_is_rate_limited(): void
    {
        $payload = [
            'full_name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'phone' => '+1 (555) 123-4567',
            'service' => 'book-writing',
            'message' => 'This is a valid test message with at least ten characters.',
        ];

        // Send 5 successful requests (rate limit is 5 per minute)
        for ($i = 0; $i < 5; $i++) {
            $this->post(route('contact.store'), $payload)->assertRedirect();
        }

        // The 6th request should be blocked with 429 Too Many Requests
        $this->post(route('contact.store'), $payload)->assertStatus(429);
    }
}
