<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home', [
            'ebook' => config('ebook'),
        ]);
    }

    public function about()
    {
        return view('pages.about', [
            'ebook' => config('ebook'),
        ]);
    }

    public function portfolio()
    {
        return view('pages.portfolio', [
            'ebook' => config('ebook'),
        ]);
    }

    public function blog()
    {
        return view('pages.blog', [
            'ebook' => config('ebook'),
        ]);
    }

    public function faq()
    {
        return view('pages.faq', [
            'ebook' => config('ebook'),
        ]);
    }
}
