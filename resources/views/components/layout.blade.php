<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infinite Network</title>

    @vite(entrypoints: ['resources/css/app.css', 'resources/js/app.js'])
</head>
 <body>
    @if(session('success'))
        <div id="flash" class="p-4 font-semibold text-center text-green-500 bg-green-50">
            {{ session('success') }}
        </div>

    @endif
    <header>
        <nav>
                <h1 class="text-blue-700 ">Infinite Network</h1>
                <a href="{{ route('Infinite.index') }}">All Infinite Networks</a>
                <a href="{{ route('Infinite.create') }}">Create New Infinite Network</a>
            </ul>
        </nav>
    </header>
    <main class="container">

        {{-- ✅ Include the slot for dynamic content --}}
         @if (session('success'))
            <div id="flash" class="p-4 font-semibold text-center text-green-500 bg-green-50">
                {{ session('success') }}
            </div>
        @endif

      {{ $slot }}
    </main>
 </body>
</html>
