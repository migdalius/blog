@extends('layouts.adminapp')


@section('title', 'Wystaw aukcje')



@section('content')
  @if (session('status'))
    <div class="alert alert-success">
      {{ session('status') }}
    </div>
  @endif

  <div class="container">
    <h4 class="mb-3">1/4. Przygotuj się do wystania nowego dostawcy</h4>     
    <div class="row">
      <div class="form-group col-md-4">
        <div class="dropdown">
          <button class="dasza_button btn btn-light dropdown-toggle btn-block" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" value="Wybierz dostawcę">Wybierz dostawcę</button>
          <div class="dropdown-menu col-md-12">
            <a class="dropdown-item">czasnabuty</a>
            <a class="dropdown-item">kesi</a>
            <a class="dropdown-item">kupbuty</a>
            <a class="dropdown-item">sporti</a>
          </div>
        </div>
      </div>
  	</div>

    <div class="row">
      <div class="col-md-12"> 
        <table class="table table-bordered" id="example2">
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
              <th>Edytuj</th>
            </tr>
          </thead>
          <tbody id="wystaw_1_body">
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
                    <button class="edit-modal btn btn-light" data-id="{{$kategoria->id}}" data-dostawca="{{$kategoria->dostawca}}"
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
      </div>
      <div class="form-group float-right">
        <a class="btn btn-dark btn-lg" href="{{route ('wystaw_krok_2')}}" role="button">Nastęny krok</a>
      </div>

    </div>           
@endsection




@section ('tabela')
<script>
  $('.dropdown').on('click', '.dropdown-item', function(){
      var dostawca = $(this).text();
      $(".dasza_button").text($(this).text());
      // $(".dasza_button").val($(this).text());
      replaceTable(dostawca);
   });

function replaceTable(dostawca){
  var txt = '';
  var rows_from_db = {!! json_encode($kategorie->toArray()) !!};
  var i;
  //alert(rows_from_db[0]['dostawca']);
  for(i=0; i<rows_from_db.length; i++){
        if(rows_from_db[i]['dostawca'] === dostawca){
           txt += '<tr class="kategoria'+rows_from_db[i]['id']+'"><td>'+rows_from_db[i]['id']+'</td><td>'+rows_from_db[i]['dostawca']+'</td><td>'+rows_from_db[i]['kategoria']+'</td><td>'+rows_from_db[i]['tag1']+'</td><td>'+rows_from_db[i]['tag2']+'</td><td>'+rows_from_db[i]['tag3']+'</td><td>'+rows_from_db[i]['tag4']+'</td><td>'+rows_from_db[i]['tag5']+'</td><td>'+rows_from_db[i]['tag6']+'</td><td>'+rows_from_db[i]['tag7']+'</td><td>'+rows_from_db[i]['tag8']+'</td><td>'+rows_from_db[i]['tag9']+'</td><td>'+rows_from_db[i]['tag10']+'</td><td><button class="edit-modal btn btn-light" data-id="'+rows_from_db[i]['id']+'" data-dostawca="'+rows_from_db[i]['dostawca']+'"      data-kategoria="'+rows_from_db[i]['kategoria']+'" data-tag1 ="'+rows_from_db[i]['tag1']+'" data-tag2 ="'+rows_from_db[i]['tag2']+'" data-tag3 ="'+rows_from_db[i]['tag3']+'" data-tag4 ="'+rows_from_db[i]['tag4']+'" data-tag5 ="'+rows_from_db[i]['tag5']+'" data-tag6 ="'+rows_from_db[i]['tag6']+'" data-tag7 ="'+rows_from_db[i]['tag7']+'" data-tag8 ="'+rows_from_db[i]['tag8']+'" data-tag9 ="'+rows_from_db[i]['tag9']+'" data-tag10 ="'+rows_from_db[i]['tag10']+'"><span class="glyphicon glyphicon-edit"></span> Edytuj</button></td></tr>';
        }
      }
    document.getElementById("wystaw_1_body").innerHTML = txt;
}
</script>
@endsection