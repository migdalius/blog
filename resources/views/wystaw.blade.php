@extends('layouts.adminapp')


@section('title', 'Wystaw aukcje')



@section('content')
  @if (session('status'))
    <div class="alert alert-success">
      {{ session('status') }}
    </div>
  @endif

  <div class="container">
    {{csrf_field()}}
    <h4 class="mb-3">1/4. Przygotuj się do wystania nowego dostawcy</h4> 
    <div class ='error_div'> 
        <a class ="error"></a>
    </div>    
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
                    <button class="edit-modal btn btn-light" data-id="{{$kategoria->id}}" data-dostawcadb="{{$kategoria->dostawca}}"
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

    @include('my_modal_krok_2')         
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
           txt += '<tr class="kategoria'+rows_from_db[i]['id']+'"><td>'+rows_from_db[i]['id']+'</td><td>'+rows_from_db[i]['dostawca']+'</td><td>'+rows_from_db[i]['kategoria']+'</td><td>'+rows_from_db[i]['tag1']+'</td><td>'+rows_from_db[i]['tag2']+'</td><td>'+rows_from_db[i]['tag3']+'</td><td>'+rows_from_db[i]['tag4']+'</td><td>'+rows_from_db[i]['tag5']+'</td><td>'+rows_from_db[i]['tag6']+'</td><td>'+rows_from_db[i]['tag7']+'</td><td>'+rows_from_db[i]['tag8']+'</td><td>'+rows_from_db[i]['tag9']+'</td><td>'+rows_from_db[i]['tag10']+'</td><td><button class="edit-modal btn btn-light" data-id="'+rows_from_db[i]['id']+'" data-dostawcadb="'+rows_from_db[i]['dostawca']+'" data-kategoria="'+rows_from_db[i]['kategoria']+'" data-tag1 ="'+rows_from_db[i]['tag1']+'" data-tag2 ="'+rows_from_db[i]['tag2']+'" data-tag3 ="'+rows_from_db[i]['tag3']+'" data-tag4 ="'+rows_from_db[i]['tag4']+'" data-tag5 ="'+rows_from_db[i]['tag5']+'" data-tag6 ="'+rows_from_db[i]['tag6']+'" data-tag7 ="'+rows_from_db[i]['tag7']+'" data-tag8 ="'+rows_from_db[i]['tag8']+'" data-tag9 ="'+rows_from_db[i]['tag9']+'" data-tag10 ="'+rows_from_db[i]['tag10']+'"><span class="glyphicon glyphicon-edit"></span> Edytuj</button></td></tr>';
        }
      }
    document.getElementById("wystaw_1_body").innerHTML = txt;
}


$(document).on('click', '.edit-modal', function() {
          $('#footer_action_button').text(" Aktualizuj");
          $('#footer_action_button').addClass('glyphicon-check');
          $('#footer_action_button').removeClass('glyphicon-trash');
          $('.actionBtn').addClass('btn-success');
          $('.actionBtn').removeClass('btn-danger');
          $('.actionBtn').addClass('edit');
          $('.modal-title').text('Edytuj');
          $('.deleteContent').hide();
          $('.form-horizontal').show();
          $('#id').val($(this).data('id'));
          $('#dostawcadb').val($(this).data('dostawcadb'));
          $('#kategoria').val($(this).data('kategoria'));
          $('#tag1').val($(this).data('tag1'));
          $('#tag2').val($(this).data('tag2'));
          $('#tag3').val($(this).data('tag3'));
          $('#tag4').val($(this).data('tag4'));
          $('#tag5').val($(this).data('tag5'));
          $('#tag6').val($(this).data('tag6'));
          $('#tag7').val($(this).data('tag7'));
          $('#tag8').val($(this).data('tag8'));
          $('#tag9').val($(this).data('tag9'));
          $('#tag10').val($(this).data('tag10'));

          $('#myModal').modal('show');
      });
      
      $('.modal-footer').on('click', '.edit', function() {
     
            $.ajax({
                method: 'post',
                url: '/wystaw/editKategorie',
                dataType : 'json',
                data:{
                    '_token':$('input[name=_token]').val(),
                    'kategoria':$('#kategoria').val(),
                    'dostawcadb':$('#dostawcadb').val(),
                    'id': $("#id").val(),
                    'tag1': $('#tag1').val(),
                    'tag2': $('#tag2').val(),
                    'tag3': $('#tag3').val(),
                    'tag4': $('#tag4').val(),
                    'tag5': $('#tag5').val(),
                    'tag6': $('#tag6').val(),
                    'tag7': $('#tag7').val(),
                    'tag8': $('#tag8').val(),
                    'tag9': $('#tag9').val(),
                    'tag10': $('#tag10').val()
                },

                success: function(data) {
                    if ((data.errors)){
                        $('.error').text(data.errors);
                        $('.error_div').addClass('alert alert-info');
                        console.log("asd");
                    }
                    $('.kategoria' + data.id).replaceWith("<tr class='kategoria" + data.id + "'><td>" + data.id + "</td><td>" + data.dostawcadb + "</td><td>" + data.kategoria + "</td><td>" + data.tag1 + "</td><td>" + data.tag2 + "</td><td>" + data.tag3 + "</td><td>" + data.tag4 + "</td><td>" + data.tag5 + "</td><td>" + data.tag6 + "</td><td>" + data.tag7 + "</td><td>" + data.tag8 + "</td><td>" + data.tag9 + "</td><td>" + data.tag10 + "</td> <td><button class='edit-modal btn btn-info' data-id='" + data.id + "' data-kategoria='" + data.kategoria + "' data-dostawcadb='" + data.dostawcadb + "' data-tag1='" + data.tag1 + "' data-tag2='" + data.tag2 + "' data-tag3='" + data.tag3 + "' data-tag4='" + data.tag4 + "' data-tag5='" + data.tag5 + "' data-tag6='" + data.tag6 + "' data-tag7='" + data.tag7 + "' data-tag8='" + data.tag8 + "' data-tag9='" + data.tag9 + "' data-tag10='" + data.tag10 + "'><span class='glyphicon glyphicon-edit'></span> Edytuj</button></td></tr>");
                }
            });
        });


</script>
@endsection