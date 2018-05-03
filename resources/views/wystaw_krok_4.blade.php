@extends('layouts.adminapp')
@section ('table')
  <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="{{ asset('tabela/jquery.tabledit.js') }}"></script>
@endsection

@section('title', 'Wystaw aukcje')

@section('content')
  @if (session('status'))
    <div class="alert alert-success">
      {{ session('status') }}
    </div>
  @endif

    <div class="col-md-12 order-md-1">
    <h4 class="mb-3">4/4.Wystaw aukcje allegro</h4>
    <form class="needs-validation" novalidate>
      <div class="row">
        <div class="col-md-4 mb-3">
          <label for="exampleSelect1"></label>
            <div class="dropdown">
            <button class="btn btn-default dropdown-toggle btn-block btn-lg" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Wybierz czas dostawy</button>
            <div class="dropdown-menu col-md-12">
              <a class="dropdown-item"> 24 godziny </a>
              <a class="dropdown-item"> 1 dzień </a>
              <a class="dropdown-item"> 2 dni </a>
              <a class="dropdown-item"> 4 dni </a>
            </div>
            </div>
        </div>

        <div class="col-md-4 mb-3">
          <label for="lastName">Dodatkowy opis:</label>
          <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
          <div class="invalid-feedback">
            Valid last name is required.
          </div>
        </div>

        <div class="col-md-4 mb-3">
          <label for="lastName">Dodatkowe tagi:</label>
          <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
          <div class="invalid-feedback">
            Valid last name is required.
          </div>
        </div>

      </div>


      <div class="row">
        <div class="col-md-4 mb-3">
          <label for="exampleSelect1"></label>
          <div class="dropdown">
          <button class="btn btn-default dropdown-toggle btn-block btn-lg" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Wybierz dostawcę</button>
          <div class="dropdown-menu col-md-12">
            <a class="dropdown-item"> Czasnabuty </a>
            <a class="dropdown-item">Kesi</a>
            <a class="dropdown-item">Kupbuty</a>
            <a class="dropdown-item">Sporti</a>
          </div>
        </div>
        </div>
        <div class="col-md-4 mb-3">
          <label for="exampleSelect1"></label>
          <div class="dropdown">
          <button class="btn btn-default dropdown-toggle btn-block btn-lg" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Wybierz konto allegro</button>
          <div class="dropdown-menu col-md-12">
            <a class="dropdown-item"> Winkels </a>
            <a class="dropdown-item"> Netrelo </a>
            <a class="dropdown-item"> Leukaspidai</a>
            <a class="dropdown-item"> hippeis </a>
          </div>
        </div>
        </div>

        <div class="col-md-4 mb-3">
          <br>
          <button class="btn btn-dark btn-lg btn-block" type="submit">Wystaw</button>
        </div>
      </div>
    </div>    

               
@endsection