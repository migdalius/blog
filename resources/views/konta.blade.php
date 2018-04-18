@extends('layouts.adminapp')

@section('title', 'Moje konta Allegro')

@section('content')
  
  @if (session('message'))
    @if( session('message') === 'Zalogowano poprawnie')
      <div class="alert alert-success">
        {{ session('message') }}
      </div>
    @else
      <div class="alert alert-danger">
        {{ session('message') }}
      </div>
    @endif
  @endif

  <div class="col-md-8 order-md-1">
    <div class="btn-group-vertical">
    <h4 class="mb-3"> <a href="{{route ('dodaj_konta')}}">Dodaj nowe konto Allegro</a> </h4>
    
  </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-10 order-md-1">
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Login</th>
            <th scope="col">Data dodania</th>
            <th scope="col">Spółka</th>
          </tr>
        </thead>
        <tbody>
          @if(count($konta))
            @foreach($konta as $konto)
              @if(\Auth::user()->id == $konto->user_id)
                <tr>
                  <td>{{$konto->login}}</td>
                  <td>{{$konto->created_at}}</td>
                  <td>{{$konto->user->name}}</td>
                </tr>
              @endif
            @endforeach
          @else
            <tr>
              <td>
                <div class="alert alert-warning" role="alert">
                  <strong>Uwaga! - </strong>Nie dodałeś żadnego konta allegro <a href= "{{route ('dodaj_konta')}}">(Dodaj konto)</a>
                </div>
              </td>
            </tr>
          @endif

        </tbody>
      </table>
    </div>
  </div>

  <br>
  <br>
  <br>
               
@endsection
