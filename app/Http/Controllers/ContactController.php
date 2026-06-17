<?php

namespace App\Http\Controllers;

use App\Mail\ContactInquiry;
use App\Models\ContactInquiry as ContactInquiryModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;

class ContactController extends Controller
{
    /**
     * Display the contact form.
     *
     * Security Detail: Whitelisting the serviceSlug query parameter prevents
     * configuration key traversal/probing or dynamic inclusion of arbitrary views.
     */
    public function create(Request $request)
    {
        $serviceSlug = $request->query('service');
        $validServices = array_keys(config('ebook.services', []));
        
        $selectedService = null;
        if ($serviceSlug && in_array($serviceSlug, $validServices, true)) {
            $selectedService = config("ebook.services.$serviceSlug");
        }

        return view('pages.contact', [
            'ebook' => config('ebook'),
            'selectedService' => $selectedService,
            'selectedServiceSlug' => $selectedService ? $serviceSlug : null,
        ]);
    }

    /**
     * Store a contact inquiry.
     *
     * Security Detail: 
     * 1. Strict Input Validation limits the characters, lengths, and valid values for each field,
     *    mitigating buffer overflows, input spamming, and format injection.
     * 2. Strict whitelist validation for 'service' prevents malicious manipulation of options.
     * 3. Sanitization strips any unexpected HTML/JS code (XSS vectors) prior to storage/mailing.
     * 4. Eloquent model creation uses parameterized SQL queries (via PDO under the hood), 
     *    neutralizing SQL injection (SQLi) attacks.
     */
    public function store(Request $request)
    {
        // 1. Strict Validation Rules
        $validated = $request->validate([
            // Restrict name to standard alphabetical chars, spaces, dots, dashes, and single quotes.
            // Max length restricts payload size.
            'full_name' => ['required', 'string', 'min:2', 'max:100', 'regex:/^[a-zA-Z\s\-\'.]+$/'],
            
            // Validate email format to block invalid entries.
            'email' => ['required', 'email', 'max:255'],
            
            // Allow only standard telephone symbols (digits, spaces, dashes, parens, and optional plus).
            'phone' => ['required', 'string', 'min:7', 'max:30', 'regex:/^\+?[0-9\s\-\(\)]+$/'],
            
            // Enforce that the service requested must match one of the whitelisted configuration keys.
            'service' => ['nullable', 'string', Rule::in(array_keys(config('ebook.service_links', [])))],
            
            // Limit message size to prevent Denial of Service (DoS) via huge payload injections.
            'message' => ['required', 'string', 'min:10', 'max:5000'],
        ]);

        // 2. Input Sanitization (Defense-in-depth against XSS in downstream rendering like HTML mails)
        $sanitized = [
            'full_name' => strip_tags(trim($validated['full_name'])),
            'email' => filter_var(trim($validated['email']), FILTER_SANITIZE_EMAIL),
            'phone' => strip_tags(trim($validated['phone'])),
            'service' => $validated['service'] ? strip_tags(trim($validated['service'])) : null,
            'message' => strip_tags(trim($validated['message'])),
        ];

        // 3. Parameterized Database Storage (Neutralizing SQL Injections)
        // Eloquent's create method binds values to placeholders in a prepared SQL query.
        // The SQLite driver handles binding variables safely so they cannot escape the SQL syntax.
        ContactInquiryModel::create($sanitized);

        // 4. Send email to the site owner (configured email, using sanitized data)
        Mail::to(config('ebook.contact_email', 'pooky.books1@gmail.com'))->send(new ContactInquiry($sanitized));

        return redirect()
            ->back()
            ->with('success', 'Thanks for reaching out. We will contact you within 24 hours.');
    }

    public function thankYou()
    {
        return view('pages.thank-you', [
            'ebook' => config('ebook'),
        ]);
    }
}
