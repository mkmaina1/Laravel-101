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
                <h1>
                    <a href="{{ route('Infinite.index') }}" class="text-blue-700 ">Infinite Network</a>
                    <span class="text-gray-500"> - Connecting the World</span>
                </h1>

                @guest
                <a href="{{ route('show.login') }}" class="btn">Login</a>
                <a href="{{ route('show.register') }}" class="btn">Register</a>
                @endguest

                @auth
                <span class="pr-2 border-r-2 border-gray-300">
                Hello there, {{ Auth::user()->name }}
             </span>
         <a href="{{ route('Infinite.index') }}">All Infinite Networks</a>
                <form action="{{ route('logout') }}" method="POST" class="m-0">
                    @csrf
                    <button type="submit" class="btn">Logout</button>
                </form>
            @endauth
        </ul>
        </nav>
    </header>
    <main class="container">

        {{-- ✅ Include the slot for dynamic content --}}

        {{ $slot}}


    </main>
 </body>
</html>


<script>
    // Flash message fade out
    setTimeout(function() {
        const flash = document.getElementById('flash');
        if (flash) {
            flash.style.transition = 'opacity 0.5s ease-out';
            flash.style.opacity = '0';
            setTimeout(() => {
                flash.remove();
            }, 500);
        }
    }, 3000);
</script>

