@extends('layout/main-layout')

@section('content')
<div class="container">
    
    @foreach ($movies as $item)
        <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">{{$item->title}}</h5>
              <h6 class="card-subtitle mb-2 text-body-secondary">{{$item->original_title}}</h6>
              <span class="card-text">Nazionalità: {{$item->nationality}}</span>
              <br>
              <span  class="card-link">Data uscita: {{$item->date}}</span>
              <br>
              <span  class="card-link">Voto: {{$item->vote}}</span>
            </div>
          </div>   
    @endforeach
</div>

    
@endsection