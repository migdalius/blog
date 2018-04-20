@extends('layouts.adminapp')
@section ('table')
  <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="{{ asset('tabela/jquery.tabledit.js') }}"></script>
@endsection

@section('title', 'Wystaw aukcje')

@section('content')
  @if (session('status'))
    <div class="alert alert-success">
      {{ session('status') }}
    </div>
  @endif

    <div class="col-md-12 order-md-1">
      <div class="col-md-12 order-md-1">
        <h4 class="mb-3">2/4. Ustaw narzut i dodatek do ceny końcowej</h4>
        <div class="row">  
          <!-- tu wstawić tabelę from kontos-->
          <table class="table table-striped table-bordered" id="example2">
            <thead>
              <tr>
                <th>Konto</th>
                <th>Narzut</th>
                <th>Dodatek</th>
              </tr>
            </thead>
            <tbody>
              @foreach($konta as $konto)
                @if(\Auth::user()->id == $konto->user_id)
                  <tr>
                    <td contenteditable="true">{{$konto->login}}</td>
                    <td contenteditable="true">{{$konto->narzut}}</td>
                    <td contenteditable="true">{{$konto->dodatek}}</td>
                  </tr>
                @endif
              @endforeach
            </tbody>
          </table>
          <!-- KONIEC TABELI -->
        </div>
        
      </div>
      <div class="float-right">
        <a class="btn btn-primary" href="{{route ('wystaw_krok_3')}}" role="button">Nastęny krok</a>
      </div>
    </div>    

               
@endsection


@section ('tabela')
<script type="text/javascript">

    if($(editableObj).attr('data-old_value') === editableObj.innerHTML)
    return false;
    // send ajax to update value
    $(editableObj).css("background","#FFF no-repeat right");
    $.ajax({
        url: "saveInlineEdit.php",
        cache: false,
        data:'column='+column+'&value='+editableObj.innerHTML+'&id='+id,
        success: function(response)  {
            console.log(response);
            // set updated value as old value
            $(editableObj).attr('data-old_value',editableObj.innerHTML);
            $(editableObj).css("background","#FDFDFD");         
        }

   });
</script>
@endsection