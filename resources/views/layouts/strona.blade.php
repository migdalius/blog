
<!doctype html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Pakowalnie.pl">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <title>Pakowalnie.pl - zintegrowany system obsługi allegro</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('pricing.css') }}" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-expand-md navbar-white fixed-top bg-white d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
      <img class="my-0 mr-md-auto" src="{{ asset ('logo.png')}}" alt="" width="60" height="60">
      <!-- <h5 class="my-0 mr-md-auto font-weight-normal">Pakowalnie.pl</h5> -->
      <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="{{ route ('producenci')}}">Producenci</a>
        <a class="p-2 text-dark" href="{{ route ('hurtownie')}}">Hurtownie</a>
        <a class="p-2 text-dark" href="{{ route ('sklepy')}}">Sklepy</a>
        <a class="p-2 text-dark" href="{{ route ('kontakt')}}">Kontakt</a>
      </nav>
      <a class="btn btn-outline-primary" href="{{ url('/login') }}">Zaloguj</a>
    </nav>

   

    <div class="container" >
      <!-- jak zamienić br na prawidłowy tekst -->
      <br>
      <br>
      <!-- jak zamienić br na prawidłowy tekst -->
      @yield('content')
      
      <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
          <div class="col-12 col-md">
            <img class="mb-2" src="{{ asset ('logo.png')}}" alt="" width="24" height="24">
            <small class="d-block mb-3 text-muted">&copy; 2015-2018 - pakowalnie.pl</small>
          </div>
          <!--
          <div class="col-6 col-md">
            <h5>Kategoria1</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">1</a></li>
              <li><a class="text-muted" href="#">2</a></li>
              <li><a class="text-muted" href="#">3</a></li>
              <li><a class="text-muted" href="#">4</a></li>
              <li><a class="text-muted" href="#">5</a></li>
              <li><a class="text-muted" href="#">6</a></li>
            </ul>
          </div>

          <div class="col-6 col-md">
            <h5>Kategoria2</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">1</a></li>
              <li><a class="text-muted" href="#">2</a></li>
              <li><a class="text-muted" href="#">3</a></li>
              <li><a class="text-muted" href="#">4</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>Kategoria3</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">1</a></li>
              <li><a class="text-muted" href="#">2</a></li>
              <li><a class="text-muted" href="#">3</a></li>
              <li><a class="text-muted" href="#">4</a></li>
            </ul>
          </div>
        </div>
      </footer>
    </div>

    -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="{{ asset('assets/js/vendor/jquery-slim.min.js') }}"><\/script>')</script>
    <script src="{{ asset('assets/js/vendor/popper.min.js') }}"></script>
    <script src="{{ asset('dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/holder.min.js') }}"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
  </body>
</html>
