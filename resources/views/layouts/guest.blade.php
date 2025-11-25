<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex w-full">
            <!-- Left Side: Form -->
            <div class="w-full md:w-1/2 bg-[#74A6AF] flex flex-col justify-center items-center p-8">
                <div class="w-full max-w-md bg-[#E0F2F1] rounded-[2rem] shadow-2xl p-8 md:p-12 relative">
                    {{ $slot }}
                </div>
            </div>

            <!-- Right Side: Image -->
            <div class="hidden md:block md:w-1/2 bg-cover bg-center relative" style="background-image: url('{{ asset('loginregister.png') }}');">
                <!-- Fallback if image missing (optional overlay or pattern) -->
                <div class="absolute inset-0 bg-black/10"></div>
            </div>
        </div>
    </body>
</html>
