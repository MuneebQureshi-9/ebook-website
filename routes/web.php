<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::redirect('/home', '/');

Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/portfolio', [PageController::class, 'portfolio'])->name('portfolio');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/faq', [PageController::class, 'faq'])->name('faq');

Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
// Security Detail: Route Parameter Constraint prevents directory traversal (e.g. services/../../etc/passwd)
// and limits inputs to a strict regex format (alphanumeric and dashes).
Route::get('/services/{slug}', [ServiceController::class, 'show'])
    ->name('services.show')
    ->where('slug', '[a-zA-Z0-9\-]+');

Route::get('/contact', [ContactController::class, 'create'])->name('contact');
// Security Detail: Rate Limiting (Throttling) blocks brute-force form submission, email spam, and 
// server resource exhaustion/DoS by limiting requests to 5 per minute per IP address.
Route::post('/contact', [ContactController::class, 'store'])
    ->name('contact.store')
    ->middleware('throttle:5,1');
Route::get('/thank-you', [ContactController::class, 'thankYou'])->name('contact.thank-you');
