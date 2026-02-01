<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Verificador 8M' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 min-h-screen font-sans">
    <nav class="bg-white border-b border-gray-200 sticky top-0 z-50">
    @if (session('success'))
        <div class="fixed top-4 left-1/2 transform -translate-x-1/2 z-50">
            <div class="bg-green-500 text-white px-6 py-3 rounded shadow">
                {{ session('success') }}
            </div>
        </div>
    @endif

    <div class="max-w-2xl mx-auto px-4 h-16 flex items-center justify-between">
        <div class="flex items-center gap-2">
            <span class="text-2xl">🕵️‍♀️</span>
            <span class="font-bold text-xl text-purple-700">Verificador 8M</span>
        </div>

        <div class="flex gap-2 items-center">
            @auth
                <span class="text-sm text-gray-600">
                    {{ auth()->user()->name }}
                </span>

                <form method="POST" action="/logout">
                    @csrf
                    <button class="text-sm text-red-500 hover:underline">
                        Logout
                    </button>
                </form>
            @else
                <a href="/login" class="text-sm text-gray-600 hover:underline">
                    Login
                </a>
                <a href="/register"
                   class="bg-purple-600 text-white px-3 py-1 rounded text-sm">
                    Register
                </a>
            @endauth
        </div>
    </div>
</nav>


    <main class="max-w-2xl mx-auto py-6 px-4">
        {{ $slot }} </main>
    
        <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

</body>
</html>