<x-layout>
 
  
  <div class="container-fluid games">
    <div class="row h-100 justify-content-center">
      <div class="row">
        <h2 class="display-5 text-white text--center text-color">I giochi dell'anno</h2>
      </div>
      @foreach ($games as $game) 
      
      <div class="col-12 col-md-3">
       
        <x-card 
        :game="$game"
        title="{{$game['title']}}"
        />
        
        
      </div>
      
      
      @endforeach
      <div class="col-12 d-flex justify-content-center align-items-center">
      </div>
    </div>
  </div>
  
  
</x-layout>
