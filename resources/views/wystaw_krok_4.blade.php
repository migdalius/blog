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
          <label for="exampleSelect1">Czas dostawy:</label>
            <select class="form-control" id="exampleSelect1">
              <option>Czasnabuty</option>
              <option>Kesi</option>
              <option>Kupbuty</option>
              <option>Sporti</option>
            </select>
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
          <label for="exampleSelect1">Dostawca</label>
          <select class="form-control" id="exampleSelect1">
            <option>Czasnabuty</option>
            <option>Kesi</option>
            <option>Kupbuty</option>
            <option>Sporti</option>
          </select>
        </div>
        <div class="col-md-4 mb-3">
          <label for="exampleSelect1">Wybierz konto allegro:</label>
          <select class="form-control" id="exampleSelect1">
            <option>Czasnabuty</option>
            <option>Kesi</option>
            <option>Kupbuty</option>
            <option>Sporti</option>
          </select>
        </div>

        <div class="col-md-4 mb-3">
          <br>
          <button class="btn btn-primary btn-lg btn-block" type="submit">Wystaw</button>
        </div>
      </div>
    </div>    

               
@endsection