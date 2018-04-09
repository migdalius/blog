@extends('layouts.admin')

@section('content')

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

               <div class="col-md-12 order-md-1">
          			<h4 class="mb-3">1. Przygotuj się do wystania nowego dostawcy</h4>
          			<div class="row">
             <div class="form-group">
             	 <div class="col-md-4 order-md-1">
    			<label for="exampleFormControlSelect1"></label>
    				<select class="form-control" id="exampleFormControlSelect1">
      				<option>Kesi</option>
      				<option>Sporti</option>
      				<option>Czasnabuty</option>
      				<option>Kupbuty</option>
    			</select>
    		</div>
  			</div>
          </div>
          <div class="container col-md-8">
  <h2></h2>
  <p></p>            
  <table class="table table-bordered ">
    <thead>
      <tr>
        <th>Kategoria 1</th>
        <th>Kategoria 2</th>
        <th>Tagi</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>różówe</td>
        <td>łądne</td>
        <td>ładniejsze</td>
      </tr>
      <tr>
        <td>Czarne</td>
        <td>Złote</td>
        <td>piękne</td>
      </tr>
      <tr>
        <td>takie</td>
        <td>dakie</td>
        <td>super łądne</td>
      </tr>
    </tbody>
  </table>
   <hr class="mb-4">
</div>
</div>

<div class="col-md-12 order-md-1">
   <h4 class="mb-3">2. Zarządzaj ceną:</h4>
   <div class="row">
              <div class="col-md-2 mb-3">
                <label for="marza">Marża (%)</label>
                <input type="text" class="form-control" id="marza" placeholder="" value="" required>
              </div>

              <div class="col-md-2 mb-3">
                <label for="dodatek">Dodatek (np: 0,10)</label>
                <input type="text" class="form-control" id="dodatek" placeholder="" value="" required>
              </div>
            </div>
             <hr class="mb-4">
</div>

<div class="col-md-12 order-md-1">
          			<h4 class="mb-3">3.Wystaw aukcje allegro</h4>
          		</div>



               
@endsection
