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

        <div class="row col-sm-6">  
          <!-- tu wstawić tabelę from kontos-->
          <table class="table table-striped table-bordered" id="example2">
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
                      <button class="edit-modal btn btn-info" data-id="{{$konto->id}}" data-login="{{$konto->login}}"
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
        <a clas ="error"> </a>
      </div>
      <div class="float-center">
        <a class="btn btn-primary" href="{{route ('wystaw_krok_3')}}" role="button">Nastęny krok</a>
      </div>
    </div> 

    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title"></h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            
          </div>
          <div class="modal-body">

            <form class="form-horizontal" role="form">

              <div class="form-group">
                <label class="control-label col-sm-2" for="id">ID:</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" id="fid" disabled>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="login">LOGIN:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="logi" disabled>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="narzut">Narzut:</label>
                <div class="col-sm-10">
                  <input type="number" step="0.01" class="form-control" id="narzu">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2" for="dodatek">Dodatek:</label>
                <div class="col-sm-10">
                  <input type="number" step="0.01" class="form-control" id="dodate">
                </div>
              </div>

            </form>


            <div class="deleteContent">
              Are you Sure you want to delete <span class="dname"></span> ? <span
                class="hidden did"></span>
            </div>

            <div class="modal-footer">
              <button type="button" class="edit btn actionBtn" data-dismiss="modal">
                <span id="footer_action_button" class='glyphicon'> </span>
              </button>

              <button type="button" class="btn btn-warning" data-dismiss="modal">
                <span class='glyphicon glyphicon-remove'></span> Close
              </button>
            </div>

          </div>
        </div>
      </div>   
    </div>

               
@endsection


@section ('tabela')
<script type="text/javascript">

  $(document).on('click', '.edit-modal', function() {
          $('#footer_action_button').text(" Update");
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