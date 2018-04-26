@extends('layouts.adminapp')


@section('title', 'Wystaw aukcje')



@section('content')
  @if (session('status'))
    <div class="alert alert-success">
      {{ session('status') }}
    </div>
  @endif

  <div class="col-md-12 order-md-1">
    <h4 class="mb-3">1/4. Przygotuj się do wystania nowego dostawcy</h4>
      <div class="row">
        <div class="form-group">
          <div class="col-md-12 order-md-3">
            <div class="form-group">

              <label for="exampleSelect1">Dostawca:</label>
              <select class="form-control" id="exampleSelect1">
                <option value="wszystkie"> Wszystkie </option>
                <option value="czasnabuty"> Czasnabuty </option>
                <option value="kesi"> Kesi </option>
                <option vale="kupbuty"> Kupbuty </option>
                <option value="sporti"> Sporti </option>
              </select>

            </div>
    		  </div>
  			</div>
      </div>
      
      <div class="container col-md-12"> 
        <table class="table table-striped table-bordered" id="example2">
          <thead>
            <tr>
              <th>ID</th>
              <th>Dostawca</th>
              <th>Kategoria</th>
              <th>Tag1</th>
              <th>Tag2</th>
              <th>Tag3</th>
              <th>Tag4</th>
              <th>Tag5</th>
              <th>Tag6</th>
              <th>Tag7</th>
              <th>Tag8</th>
              <th>Tag9</th>
              <th>Tag10</th>
            </tr>
          </thead>
          <tbody>
            @foreach($kategorie as $kategoria)
                <tr class="kategoria{{$kategoria->id}}">
                  <td>{{$kategoria->id}}</td>
                  <td>{{$kategoria->dostawca}}</td>
                  <td>{{$kategoria->kategoria}}</td>
                  <td>{{$kategoria->tag1}}</td>
                  <td>{{$kategoria->tag2}}</td>
                  <td>{{$kategoria->tag3}}</td>
                  <td>{{$kategoria->tag4}}</td>
                  <td>{{$kategoria->tag5}}</td>
                  <td>{{$kategoria->tag6}}</td>
                  <td>{{$kategoria->tag7}}</td>
                  <td>{{$kategoria->tag8}}</td>
                  <td>{{$kategoria->tag9}}</td>
                  <td>{{$kategoria->tag10}}</td>
                  <td>
                    <button class="edit-modal btn btn-info" data-id="{{$kategoria->id}}" data-dostawca="{{$kategoria->dostawca}}"
                      data-kategoria="{{$kategoria->kategoria}}" data-tag1 ="{{$kategoria->tag1}}" data-tag2 ="{{$kategoria->tag2}}" 
                      data-tag3 ="{{$kategoria->tag3}}" data-tag4 ="{{$kategoria->tag4}}" data-tag5 ="{{$kategoria->tag5}}" 
                      data-tag6 ="{{$kategoria->tag6}}" data-tag7 ="{{$kategoria->tag7}}" data-tag8 ="{{$kategoria->tag8}}" 
                      data-tag9 ="{{$kategoria->tag9}}" data-tag10 ="{{$kategoria->tag10}}">
                      <span class="glyphicon glyphicon-edit"></span> Edytuj
                    </button>
                  </td>
                </tr>
            @endforeach
          </tbody>
        </table>
      </div>

      <hr class="mb-4">
      <div class="float-right">
        <a class="btn btn-primary" href="{{route ('wystaw_krok_2')}}" role="button">Nastęny krok</a>
      </div>
    </div>

               
@endsection




@section ('tabela')

@endsection