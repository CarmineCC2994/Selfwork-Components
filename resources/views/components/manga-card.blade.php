
<div class="card bg-black text-light border-secondary h-100">

    <img
        src="{{ $image }}"
        class="card-img-top"
        alt="{{ $title }}"
        style="height: 350px; object-fit: contain; object-position: top;"
    >

    <div class="card-body d-flex flex-column">

        <h5 class="card-title text-danger">
            {{ $title }}
        </h5>

        <p class="text-secondary">
            {{ $author }}
        </p>

        <p class="card-text">
            {{ $description }}
        </p>

        <a href="{{ route('mangas.show', $id) }}"
           class="btn btn-danger mt-auto">
            Scopri il manga
        </a>

    </div>

</div>
