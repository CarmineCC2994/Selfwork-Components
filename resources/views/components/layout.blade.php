
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? 'MangaVerse' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-dark text-light">

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-black">
        <div class="container">

            <a class="navbar-brand fw-bold text-danger"
               href="{{ route('home') }}">
                MangaVerse
            </a>

            <button class="navbar-toggler" type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarContent">

                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">
                            Home
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('mangas.index') }}">
                            Manga
                        </a>
                    </li>

                </ul>

            </div>
        </div>
    </nav>

    <!-- CONTENUTO DELLA PAGINA -->
    <main>
        {{ $slot }}
    </main>

    <!-- FOOTER -->
    <footer class="bg-black text-center text-secondary py-4 mt-5">
        <p class="mb-0">
            &copy; {{ date('Y') }} MangaVerse - Il mondo dei manga
        </p>
    </footer>

</body>
</html>
