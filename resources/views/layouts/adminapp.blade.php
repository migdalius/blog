
<!doctype html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="pakowalnie.pl">
    <link rel="icon" href="{{ asset('favicon.ico') }}">

    <title>Panel administracyjny | Pakowalnie.pl</title>
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    
    
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
                <a class="nav-link" href="{{ route('home') }}">
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
              <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Rozliczenia</span>
              <a class="d-flex align-items-center text-muted" href="#">
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="{{route ('rachunki')}}">
                  <span data-feather="file-text"></span>
                  Rachunki
                </a>
              </li>
            </ul>
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Panel Administracyjny</span>
              <a class="d-flex align-items-center text-muted" href="#">
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="{{ route('uzytkownicy') }}">
                  <span data-feather="user-plus"></span>
                  Użytkownicy
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="shopping-bag"></span>
                  Dostawca Preview
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route ('aktualizacja_kategorii')}}">
                  <span data-feather="file-text"></span>
                  Aktualizacja Kategorii
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
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"> </script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    @yield('tabela')   

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
