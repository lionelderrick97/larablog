<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Little Blog</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="py-6 flex flex-col justify-between items-center min-h-screen">

    <header>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Accueil</a></li>
            </ul>
        </nav>
    </header>

    <main class="flex flex-col justify-center" role="main">
        @yield('content')
    </main>

    @include('composant/partiel/footer')

</body>

</html>