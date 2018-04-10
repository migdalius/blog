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
                <label for="webapi">Webapi <a href="{{ route('instrukcja') }}"><i class="fa fa-question-circle"></i></a></label>
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
             <div class="form-group">
             	 <div class="col-md-6 order-md-1">
    			<label for="exampleFormControlSelect1"></label>
    				<select class="form-control" id="exampleFormControlSelect1">
      				<option>Konto_allegro_1</option>
     				<option>Konto_allegro_2</option>
      				<option>Konto_allegro_3</option>
      				<option>Konto_allegro_4</option>
      				<option>Konto_allegro_5</option>
      				<option>Konto_allegro_6</option>
      				<option>Konto_allegro_7</option>
      				<option>Konto_allegro_8</option>
      				<option>Konto_allegro_9</option>
    			</select>
    		</div>
  			</div>
          </div>
               
@endsection
