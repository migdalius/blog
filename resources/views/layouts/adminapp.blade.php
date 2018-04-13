
<!doctype html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="pakowalnie.pl">
    <link rel="icon" href="{{ asset('favicon.ico') }}">

    <title>Panel administracyjny | Pakowalnie.pl</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('dist/css/bootstrap.min.css') }}" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="{{ asset('dashboard.css') }}" rel="stylesheet">
    @yield('table')
    

  </head>

  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Pakowalnie.pl</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Szukaj..." aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="{{ route('logout') }}"onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">Wyloguj</a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
          </form>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="{{ route('home') }}">
                  <span data-feather="home"></span>
                  Główny Panel <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('wystaw') }}">
                  <span data-feather="file"></span>
                  Wystaw aukcje
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('konta') }}">
                  <span data-feather="shopping-cart"></span>
                  Zarządzaj kontami
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('produkty') }}">
                  <span data-feather="users"></span>
                  Zamów produkty
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('sprzedaz') }}">
                  <span data-feather="bar-chart-2"></span>
                  Moja sprzedaż
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('szachownica') }}">
                  <span data-feather="user"></span>
                  Szachownica
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route ('zamknietych') }}">
                  <span data-feather="layers"></span>
                  Archiwa (zamknięte)
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('wystawionych') }}">
                  <span data-feather="layers"></span>
                  Archiwa (wystawione)
                </a>
              </li>
            </ul>

          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">@yield('title')</h1>
          </div>
           @yield('content')
        </main>
        
      </div>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    @yield('tabela')


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script>window.jQuery || document.write('<script src="{{ asset('assets/js/vendor/jquery-slim.min.js') }}"><\/script>')</script>
    <script src="{{ asset('assets/js/vendor/popper.min.js') }}"></script>
    <script src="{{ asset('dist/js/bootstrap.min.js') }}"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <!-- Graphs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>



  </body>
</html>
