@extends('layouts.adminapp')
@section ('table')

@endsection

@section('title', 'Wystaw aukcje')

@section('content')
  @if (session('status'))
    <div class="alert alert-success">
      {{ session('status') }}
    </div>
  @endif
  <div class="col-md-12 order-md-1">
    <h4 class="mb-3">3/4. Wybierz układ aukcji Allegro</h4>
     dupa
      <hr class="mb-4">
      <div class="float-right">
        <a class="btn btn-dark btn-lg" href="{{route ('wystaw_krok_4')}}" role="button">Nastęny krok</a>
      </div>
  </div>  

               
@endsection

    
@section ('tabela')

@endsection