<!doctype html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    

    <title>Logowanie | Pakowalnie.pl</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('signin.css') }}" rel="stylesheet">

    <meta name="csrf-token" content="{{ csrf_token() }}">
  </head>

 <body class="text-center">


    <form class="form-signin" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}

      <img class="mb-4" src="{{ asset ('logo.png')}}" alt="" width="72" height="72">
    <!--  <h1 class="h3 mb-3 font-weight-normal">Proszę zaloguj się</h1> -->

      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
      <label for="email" class="sr-only">Adres email</label>
      
      <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
      @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
      @endif
      </div>

      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
      <label for="password" class="sr-only">Hasło</label>
      
      <input id="password" type="password" class="form-control" name="password" required>
      @if ($errors->has('password'))
        <span class="help-block">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
      @endif
      </div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> 
          Zapamiętaj mnie

        </label>
      </div>

      <button class="btn btn-lg btn-primary btn-block" type="submit">Zaloguj się</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2015-2018 - Pakowalnie.pl</p>
    </form>


  </body>
</html>
