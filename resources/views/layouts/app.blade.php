<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'TechNest - Computer Parts & Laptops')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-black text-gray-200 font-sans antialiased">

    <x-navbar />

    <main>
        <x-hero />
        <x-features />
        <x-showcase />
        <x-pricing />
        <x-testimonials />
        <x-cta />
        @yield('content')
    </main>

    <x-footer />

    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</body>
</html>