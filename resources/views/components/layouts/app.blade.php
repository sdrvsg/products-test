<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $title ?? config('app.name', 'Laravel') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 flex flex-row justify-between items-center">
                    <a href="/">{{ config('app.name', 'Laravel') }}</a>
                    <a href="{{ route('products.create') }}" class="border border-gray-300 rounded py-2 px-3 hover:bg-gray-400 transition-all duration-300">
                        Create
                    </a>
                </div>
            </header>

            <main class="container mt-10 mx-auto">
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
