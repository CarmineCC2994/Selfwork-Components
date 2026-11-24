<div class="card mb-3" style="width: 18rem;">
  <img
    src="{{ $game['img'] }}"
    class="card-img-top cardImg"
    alt="Poster di {{ $title }}"
  >
  <div class="card-body">
    <h5 class="card-title">{{ $title }}</h5>
    <h6 class="card-subtitle mb-2 text-muted">{{ $game['director'] }}</h6>
    <p class="card-text">{{ $game['genres'] }}</p>
    <a href="{{ route('game.detail', ['id' => $game['id']]) }}" class="btn btn-primary">
      Leggi di più
    </a>
  </div>
</div>