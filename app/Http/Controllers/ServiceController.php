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
        $service = config("ebook.services.$slug");

        abort_if($service === null, 404);

        return view('pages.services.show', [
            'ebook' => config('ebook'),
            'service' => $service,
            'slug' => $slug,
        ]);
    }
}