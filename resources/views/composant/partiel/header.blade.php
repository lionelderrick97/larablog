<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css'])

    <title>Little Blog</title>
</head>

<body class="w-full min-h-screen">
    <header class="bg-blue-500 p-4 shadow-md">
        <nav class="container mx-auto">
            <div class="flex flex-box justify-between items-center">
                <div class="text-white text-2xl font-semibold">
                    <a href="{{ route('home') }}" class="text-white hover:text-blue-200">Little blog</a>
                </div>
                <ul class="flex space-x-4">
                    <li><a href="#" class="text-white hover:text-blue-200">Liens sociaux</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main class="min-h-screen" role="main">
        @yield('content')
    </main>

    <div class="">
        @include('composant/partiel/footer')
    </div>
</body>

</html>