@extends('layouts.admin')

@section('content')

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

              <div class="col-md-8 order-md-1">
          			<h4 class="mb-3">1. Logujemy się na konto allegro z którego chcemy pobrać nasz klucz webapi, w moim przypadku jest to konto allegro: Falxmen</h4>
          			<div class="row">
            	<div class="col-md-4 mb-3">
            		<img src="{{ asset('img/logowanie.jpg') }}" height="400px">
            	</div>
            </div>
          	  </div>
          	  <br>
          	  <div class="col-md-8 order-md-1">
          			<h4 class="mb-3">2. Następnie wchodzimy w "Moje konto" i na dole strony znajduje się webapi link (informacje i ustawienia) klikamy w niego</h4>
          			<div class="row">
            	<div class="col-md-4 mb-3">
            		<img src="{{ asset('img/moje_konto.jpg') }}" height="400px">
            	</div>
            </div>
          	  </div>		
          	  <br>
          	  <div class="col-md-8 order-md-1">
          			<h4 class="mb-3">3. Jeżeli klucz został juz wygenerowany kopiujemy go jeżeli nie tworzymy nowy, zaznaczamy opcje dla użytkownika programu, kolumne do jakich celów zostanie użyte api zostawiamy pustą lub wpisujemy do wystawiania aukcji.</h4>
          			<div class="row">
            	<div class="col-md-4 mb-3">
            		<img src="{{ asset('img/klucz_api.jpg') }}" height="300px">
            	</div>
            </div>
          	  </div>				
               
@endsection
