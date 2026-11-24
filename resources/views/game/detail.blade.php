<x-layout>
  
    
      <div class="container-fluid games">
        <div class="row h-100 justify-content-center">
            <div class="row">
                <h2 class="display-5 text-white text-center text-color">Dettagli del gioco:{{$game['title']}}</h2>

            </div>
  <div class="col-12 col-md-6 text-white d-flex flex-column justify-content-center align-items-center">
    <h5>Titolo: {{$game['title']}}</h5>
    <h6>Director:{{$game['director']}}</h6>
    <p>Genere: {{$game['genres']}}</p>
  </div>
  <div class="col-12 col-md-6 d-flex justify-content-center">
    <img src="{{$game['img']}}" alt="poster di {{$game['title']}}">
  </div>
        </div>
      </div>
    

    </x-layout>
