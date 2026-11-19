
<x-layout title="MangaVerse - Homepage">

    <!-- HERO -->
    <section class="container py-5 text-center">

        <h1 class="display-3 fw-bold text-danger">
            MangaVerse
        </h1>

        <h2 class="text-light">
            Il mondo dei manga
        </h2>

        <p class="text-secondary mt-3">
            Scopri alcune delle opere più importanti
            del panorama manga giapponese.
        </p>

        <a href="{{ route('mangas.index') }}"
           class="btn btn-danger btn-lg mt-3">
            Esplora i manga
        </a>

    </section>

    <!-- MANGA IN EVIDENZA -->
    <section class="container py-4">

        <h2 class="mb-4 border-bottom border-danger pb-3">
            Manga in evidenza
        </h2>

        <div class="row g-4">

            @foreach($mangas as $manga)

                <div class="col-md-6 col-lg-4">

                    <x-manga-card
                        :id="$manga['id']"
                        :title="$manga['title']"
                        :author="$manga['author']"
                        :description="$manga['description']"
                        :image="$manga['image']"
                    />

                </div>

            @endforeach

        </div>

    </section>

</x-layout>
