<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Infinite Network') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles & Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-gray-100 text-gray-700 font-sans antialiased">
        <header class="bg-blue-200">
            <nav class="flex items-center gap-5 max-w-screen-lg px-12 py-4 mx-auto">
                <h1 class="text-2xl font-bold text-blue-500 mr-auto">Infinite Network</h1>
                <a href="{{ route('Infinite.index') }}" class="btn">Login</a>
                <a href="{{ route('Infinite.create') }}" class="btn">Create New Account</a>
            </nav>
        </header>

    </body>
</html>
