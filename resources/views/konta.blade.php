@extends('layouts.adminapp')

@section('title', 'Zarządzaj kontami')

@section('content')
  @if (session('status'))
    <div class="alert alert-success">
      {{ session('status') }}
    </div>
  @endif
  <!-- dodaj button przekierowania do sciezki dodaj_konto.blade.php -->  

  <div class="col-md-8 order-md-1">
    <h4 class="mb-3">Moje konta allegro</h4>
  </div>
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
              <td> Nie ma dodanych kont</td>
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
