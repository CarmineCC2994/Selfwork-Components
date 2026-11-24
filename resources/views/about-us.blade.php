<x-layout>

   

    <header>
        
      <div class="container-fluid header">
        <div class="row h-100 justify-content-around align-items-center">

          <div class="col-6">
            <h2 class="text-white text-color text-center">Chi siamo</h2>

            <p class="text-white text-color">
              Siamo una squadra di appassionati cresciuti a pane, pixel e nottate davanti allo schermo. Questo spazio nasce con un obiettivo semplice: raccontare il mondo dei videogiochi senza filtri, unendo la competenza tecnica di chi vive il settore ogni giorno alla passione autentica di chi non vede l'ora di premere Start. Dalle grandi produzioni AAA alle perle indie nascoste, esploriamo ogni genere per offrire notizie, approfondimenti e un punto di ritrovo per tutta la community.
            </p>
          </div>

   

          <div class="col-6">
            <img src="/media/team.jpg" alt="teamgame" class="shadow rounded">
          </div>

        </div>
      </div>
    </header>
           <section>
            <div class="container userHeight">
                <div class="row h-100 just-content-around align-items-center">
                    @foreach ($users as $user)
                    <div class="col-12 col-md-4">
                        <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">{{$user['name']}} {{$user['surname']}} </h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">{{$user['role']}}</h6>
    <a href="{{route('aboutUsDetail', ['name'=>$user['name']])}}" class="card-link">Leggi di più</a>
    </div>
</div>
                    </div>
                        
                    @endforeach
                </div>
            </div>
          </section>

   </x-layout>
