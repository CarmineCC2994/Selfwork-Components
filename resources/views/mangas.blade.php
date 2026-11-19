
<x-layout title="MangaVerse - Catalogo">

    <section class="container py-5">

        <h1 class="text-danger mb-2">
            Catalogo Manga
        </h1>

        <p class="text-secondary mb-5">
            Tutti i manga presenti nella nostra collezione.
        </p>

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
