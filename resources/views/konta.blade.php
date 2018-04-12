@extends('layouts.adminapp')

@section('title', 'Zarządzaj kontami')

@section('content')

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
            <div class="col-md-8 order-md-1">
          			<h4 class="mb-3">1. Dodaj nowe konto allegro</h4>
          				<!-- dodaj konto allegro -->
            	<div class="row">
            	<div class="col-md-4 mb-3">
                	<label for="nazwa">Nazwa</label>
                	<input type="text" class="form-control" id="nazwa" placeholder="" value="" required>
              </div>
              <div class="col-md-4 mb-3">
                <label for="haslo">Hasło</label>
                <input type="text" class="form-control" id="haslo" placeholder="" value="" required>
              </div>
              <div class="col-md-4 mb-3">
                <label for="webapi">Webapi <a href="{{ route('instrukcja') }}">?</a></label>
                <input type="text" class="form-control" id="webapi" placeholder="" value="" required>
              </div>
            </div>
            <hr class="mb-4">
			<div class="col-md-3 mb-3">
            	<button class="btn btn-primary btn-lg btn-block" type="submit">Dodaj</button>
             </div>

            </div>

            <div class="col-md-8 order-md-1">
            	 <hr class="mb-4">
          			<h4 class="mb-3">2. Moje konta allegro</h4>
          		</div>
          <div class="row">
            <div class="col-md-10 order-md-1">
             <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Login</th>
      <th scope="col">Data dodania</th>
      <th scope="col">Spółka</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>test</td>
      <td>test</td>
      <td>@test</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>test</td>
      <td>test</td>
      <td>@test</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>test</td>
      <td>test test</td>
      <td>test</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>test</td>
      <td>test test</td>
      <td>test</td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>test</td>
      <td>test test</td>
      <td>test</td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>test</td>
      <td>test test</td>
      <td>test</td>
    </tr>
    <tr>
      <th scope="row">7</th>
      <td>test</td>
      <td>test test</td>
      <td>test</td>
    </tr>
    <tr>
      <th scope="row">8</th>
      <td>test</td>
      <td>test test</td>
      <td>test</td>
    </tr>
    <tr>
      <th scope="row">9</th>
      <td>test</td>
      <td>test test</td>
      <td>test</td>
    </tr>
    <tr>
      <th scope="row">10</th>
      <td>test</td>
      <td>test test</td>
      <td>test</td>
    </tr>
  </tbody>
</table>
</div>
          </div>

          <br>
          <br>
          <br>
               
@endsection
