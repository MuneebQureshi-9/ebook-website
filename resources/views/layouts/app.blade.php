<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title', config('ebook.default_title'))</title>
        <meta name="description" content="@yield('description', config('ebook.default_description'))">
        <meta name="keywords" content="@yield('keywords', config('ebook.default_keywords'))">
        <link rel="canonical" href="{{ url()->current() }}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Poppins:wght@600;700;800;900&display=swap" rel="stylesheet">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="site-shell">
        @include('components.navbar')

        <main id="main-content">
            @yield('content')
        </main>

        @include('components.footer')
    </body>
</html>