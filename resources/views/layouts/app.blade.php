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
<body class="font-sans antialiased text-gray-700 bg-gray-100">
    <header class="bg-blue-200">
        <nav class="flex items-center max-w-screen-lg gap-5 px-12 py-4 mx-auto">
            <h1 class="mr-auto text-2xl font-bold text-red-500">Infinite Network</h1>
            <a href="{{ route('Infinite.index') }}" class="btn">Login</a>
            <a href="{{ route('Infinite.create') }}" class="btn">Create New Account</a>
        </nav>
    </header>

    @if (isset($header))
        <div class="bg-white shadow">
            <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </div>
    @endif

    <main class="container">
        {{ $slot }}
    </main>
</body>
</html>
