<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return view('pages.services.index', [
            'ebook' => config('ebook'),
        ]);
    }

    public function show(Request $request, string $slug)
    {
        // Security Detail: Parameter Whitelisting
        // Ensure the slug is strictly one of the configured service keys to prevent 
        // config dot-notation traversal or inclusion of unauthorized partial views.
        $validServices = array_keys(config('ebook.services', []));
        abort_unless(in_array($slug, $validServices, true), 404);

        $service = config("ebook.services.$slug");

        return view('pages.services.show', [
            'ebook' => config('ebook'),
            'service' => $service,
            'slug' => $slug,
        ]);
    }
}