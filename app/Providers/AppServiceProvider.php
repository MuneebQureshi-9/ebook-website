<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Force URL scheme from APP_URL so generated asset links use correct protocol
        $appUrl = config('app.url') ?? env('APP_URL');
        if ($appUrl) {
            $scheme = parse_url($appUrl, PHP_URL_SCHEME) ?: 'https';
            URL::forceScheme($scheme);
        }
    }
}
