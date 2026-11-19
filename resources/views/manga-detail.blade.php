
<x-layout :title="$manga['title'] . ' - MangaVerse'">

    <section class="container py-5">

        <div class="row g-5">

            <div class="col-md-4">

                <img
                    src="{{ $manga['image'] }}"
                    alt="{{ $manga['title'] }}"
                    class="img-fluid rounded shadow"
                >

            </div>

            <div class="col-md-8">

                <h1 class="text-danger">
                    {{ $manga['title'] }}
                </h1>

                <h5 class="text-secondary mb-4">
                    Autore: {{ $manga['author'] }}
                </h5>

                <p>
                    <strong>Genere:</strong>
                    {{ $manga['genre'] }}
                </p>

                <hr class="border-secondary">

                <h3>Trama</h3>

                <p class="text-secondary">
                    {{ $manga['content'] }}
                </p>

                <a href="{{ route('mangas.index') }}"
                   class="btn btn-danger mt-3">
                    Torna al catalogo
                </a>

            </div>

        </div>

    </section>

</x-layout>
