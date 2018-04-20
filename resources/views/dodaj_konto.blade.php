@extends('layouts.adminapp')

@section('title', 'Zarządzaj kontami')

@section('content')
  @if (session('status'))
    <div class="alert alert-success">
      {{ session('status') }}
    </div>
  @endif

  <form method="POST" action="/konta">
  	{{csrf_field()}}
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Dodaj nowe konto allegro</h4>
        <!-- dodaj konto allegro -->
      <div class="row">
        <div class="col-md-4 mb-3">
          <label for="nazwa">Login</label>
          <input type="text" class="form-control" id="login" name="login" placeholder="" value="" required>
        </div>
        
        <div class="col-md-4 mb-3">
          <label for="password">Hasło</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="" value="" required>
        </div>
        
        <div class="col-md-4 mb-3">
          <label for="webapi">Webapi <a href="{{ route('instrukcja') }}">?</a></label>
          <input type="text" class="form-control" id="webapi" name="webapi" placeholder="" value="" required>
        </div>
      </div>
      
      <div class="row">
        <div class="col-md-6 mb-3">
          <label for="narzut">Narzut <a href="#">?</a></label>
          <input type="number" step="0.01" class="form-control" id="narzut" name="narzut" placeholder="" value="" required>
        </div>

        <div class="col-md-6 mb-3">
          <label for="dodatek">Dodatek</label>
          <input type="number" step="0.01" class="form-control" id="dodatek" name="dodatek" placeholder="" value="" required>
        </div>
      </div>
      <hr class="mb-4">
  		<div class="col-md-3 mb-3">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Dodaj</button>
      </div>
    </div>
  </form>

  @endsection