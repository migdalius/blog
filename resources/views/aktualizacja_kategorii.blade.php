@extends('layouts.adminapp')

@section('title', 'Aktualizacja kategorii')

@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="/aktualizacja_kategorii/update">
	  	{{csrf_field()}}
	    <div class="col-md-8 order-md-1">
	        <!-- dodaj konto allegro -->
	      <div class="row">
	        <div class="col-md-4 mb-3">
	          <label for="xml">xml</label>
	          <input type="text" class="form-control" id="xml" name="xml" placeholder="" value="" required>
	        </div>
	        
	        <div class="col-md-4 mb-3">
	          <label for="xml_tag">xml_tag</label>
	          <input type="text" class="form-control" id="xml_tag" name="xml_tag" placeholder="" value="" required>
	        </div>
	      <hr class="mb-4">
	      </div>
	      <div class="col-md-3 mb-3">
	        <button class="btn btn-primary btn-lg btn-block" type="submit">Dodaj</button>
	      </div>
		</div>
  </form>

  
               
@endsection