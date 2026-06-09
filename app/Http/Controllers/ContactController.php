<?php

namespace App\Http\Controllers;

use App\Mail\ContactInquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function create(Request $request)
    {
        $serviceSlug = $request->query('service');
        $selectedService = $serviceSlug ? config("ebook.services.$serviceSlug") : null;

        return view('pages.contact', [
            'ebook' => config('ebook'),
            'selectedService' => $selectedService,
            'selectedServiceSlug' => $selectedService ? $serviceSlug : null,
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name' => ['required', 'string', 'min:2'],
            'email' => ['required', 'email'],
            'phone' => ['required', 'string', 'min:7'],
            'service' => ['nullable', 'string'],
            'message' => ['required', 'string', 'min:10'],
        ]);

        // Send email to the site owner
        Mail::to('munibquresh890@gmail.com')->send(new ContactInquiry($validated));

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