<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <header class="shadow-lg">
        <div class="bg-blue-900 py-1"></div>
        <nav class="bg-blue-800 py-2">
            <a href="{{route('home')}}">
                <img src="{{asset('images/logo-cepre-2023.png')}}" class="h-10 mx-auto">
            </a>
        </nav>
    </header>
    <main class="py-10">
        <div class="container mx-auto px-4">
            @yield('content')
        </div>
    </main>
    <footer class="py-4 text-center">
        @auth
            <a href="{{route('dashboard')}}" class="text-sm text-gray-700 underline">
                Dashboard
            </a>
        @else
                <a href="{{route('login')}}" class="text-sm text-gray-700 underline">
                    Login
                </a>
                <a href="{{route('register')}}" class="text-sm text-gray-700 underline px-2">
                    Register
                </a>
        @endif
    </footer>
</body>
</html>