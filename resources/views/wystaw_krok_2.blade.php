@extends('layouts.adminapp')


@section('title', 'Wystaw aukcje')

@section('content')
  @if (session('status'))
    <div class="alert alert-success">
      {{ session('status') }}
    </div>
  @endif 

    <div class="col-md-12 order-md-1">
      {{csrf_field()}}
        <h4 class="mb-3">2/4. Ustaw narzut i dodatek do ceny końcowej</h4>

        <div class="row col-sm-12">  
          <!-- tu wstawić tabelę from kontos-->
          <table class="table" id="example2">
            <thead>
              <tr>
                <th>Konto</th>
                <th>Narzut</th>
                <th>Dodatek</th>
                <th>Edytuj</th>
              </tr>
            </thead>
            <tbody>
              @foreach($konta as $konto)
                @if(\Auth::user()->id == $konto->user_id)
                  <tr class="konto{{$konto->id}}">
                    <td>{{$konto->login}}</td>
                    <td>{{$konto->narzut}}</td>
                    <td>{{$konto->dodatek}}</td>
                    <td>
                      <button class="edit-modal btn btn-light" data-id="{{$konto->id}}" data-login="{{$konto->login}}"
                        data-narzut="{{$konto->narzut}}" data-dodatek ="{{$konto->dodatek}}">
                        <span class="glyphicon glyphicon-edit"></span> Edytuj
                      </button>
                    </td>
                
                  </tr>
                @endif
              @endforeach
            </tbody>
          </table>
          <!-- KONIEC TABELI -->
        </div>
        
      </div>
      <div>
        <a class="error"> </a>
      </div>
      <div class="float-right">
        <a class="btn btn-dark btn-lg" href="{{route ('wystaw_krok_3')}}" role="button">Nastęny krok</a>
      </div>
    </div> 

    @include('my_modal')

               
@endsection


@section ('tabela')
<script type="text/javascript">

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
          $('#fid').val($(this).data('id'));
          $('#logi').val($(this).data('login'));
          $('#narzu').val($(this).data('narzut'));
          $('#dodate').val($(this).data('dodatek'));
          $('#myModal').modal('show');
      });
      
      $('.modal-footer').on('click', '.edit', function() {
     
            $.ajax({
                method: 'post',
                url: '/wystaw_krok_2/editKonto',
                dataType : 'json',
                data:{
                    '_token':$('input[name=_token]').val(),
                    'login':$('#logi').val(),
                    'id': $("#fid").val(),
                    'narzut': $('#narzu').val(),
                    'dodatek': $('#dodate').val()
                },

                success: function(data) {
                    if ((data.errors)){
                        $('.error').text(data.errors.name);
                        console.log("asd");
                    }
                    $('.konto' + data.id).replaceWith("<tr class='konto" + data.id + "'><td>" + data.login + "</td><td>" + data.narzut + "</td><td>" + data.dodatek + "</td> <td><button class='edit-modal btn btn-info' data-id='" + data.id + "' data-login='" + data.login + "' data-narzut='" + data.narzut + "' data-dodatek='" + data.dodatek + "'><span class='glyphicon glyphicon-edit'></span> Edytuj</button></td></tr>");
                }
            });
        });


</script>
@endsection