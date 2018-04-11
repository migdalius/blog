@extends('layouts.strona')

@section('content')
<br>
<br>
<br>
    <section class="jumbotron text-center">
      <div class="container">
        <h1 class="jumbotron-heading">Czym się zajmujemy?</h1>
        <p class="lead text-muted">Wspomagamy sprzedaż w serwisie Allegro.pl wykorzystując do tego sieci neuronowe (deep learning) oferujemy pełną automatyzacje zaczynając od obróbki zdjęć i wystawiania aukcji kończąc na obsłudze (email i telefonicznej) tak by w procesie tworzenia aukcji,obsługi klienta w pełnym zakresie zarówno przed i po zakupie nie musiał ingerować żaden człowiek.</p>
        <p>
          <a href="https://en.wikipedia.org/wiki/Deep_learning" class="btn btn-primary">Więcej o deep learning</a>
        </p>
      </div>
    </section>
    <hr class="featurette-divider">
       <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Opis aukcji <span class="text-warning">Allegro</span></h2>
            <p class="lead">U każdego producenta lub hurtownika występuje zawsze jeden opis produktu nie ważne jak dobrze opisany produkt występuje on w niezmienionej formie w dziesiątkach sklepów internetowych i tysiącach aukcji allegro. Wpływa to w negatywny sposób na pozycjonowanie i na naszą sprzedaż, nasz program tworzy dla każdego produktu zupełnie nowy opis w pełni gramatycznie i stylistycznie poprawny dodatkowo rozwija go o wiele szczegółów które znajdują się w plikach xml/api takich jak: kolor,wysokość,waga a nie znajdują się w samym opisie. Oprócz dodatkowych informacji wykorzystujemy również samo zdjęcie produktu np: czapka czerwona w opisie i parametrach nie podano jaki kolor ma daszek czapki natomiast program na podstawie zdjęcia pobiera sam te informacje i uzupełnia o nie opis.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="{{asset ('img/opis_allegro.jpg')}}" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Produkty<span class="text-primary"> 57 Hurtowni</span></h2>
            <p class="lead">Nawiązujemy współprace z hurtowniami/producentami lub sklepami internetowymi wprowadzamy ich ofertę do systemu (wszystkie produkty) następnie jako użytkownik masz możliwość wystawiania aukcji na allegro z ich produktami.</p>
            <p class="lead">Produkty w hurtowni lub od producenta są zamawiane codziennie w jednej przesyłce od wszystkich klientów z systemu, dzięki czemu nie trzeba szukać dostawcy z dropshippingiem jak również nie ma potrzebu tworzenia magazynu i przetrzymywania produktów u siebie.</p>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" src="{{asset ('img/produkt.jpg')}}" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Ceny/stany magazynowe <span class="text-success">Pełna automatyzacja</span></h2>
            <p class="lead">Automatyczne zamykanie aukcji jeżeli brak danego produktu u dostawcy (domyślnie co 1h) jednak można to zmieniać, aktualizacja cen produktów jeżeli dostawca zmieni cenę produktu jest ona przeliczna na marże którą ustawiłeś dla danego dostawcy lub kategorii i aukcja allegro zostaje zaktualizowana (domyślnie co 1h) nie musisz się już martwić różnicami w cenie lub na stanie magazynowym.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="{{asset ('img/stan_magazynowy.jpg')}}" alt="Generic placeholder image">
          </div>
        </div>
        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Obsługa klienta <span class="text-primary">telefoniczna i email</span></h2>
            <p class="lead">64% email do sprzedawcy jest z pytaniem czy towar/przesyłka została wysłana, w naszym systemie takie wiadomości nawet nie trafiają do systemu ponieważ klient otrzymuje w ciągu 4 sec odpowiedź z linkiem do śledzenie przesyłki i dokładnymi danymi w jakim dniu została wysłana i kiedy dotrze. Klient końcowy nawet nie ma świadomości ,że na większość pytań otrzymał odpowiedź wysłaną przez nasz program.</p>
            <p class="lead">Dokładnie to samo tyczy się rozmów telefonicznych niestety obecnie technologia nie pozwala na prowadzenie pełnych rozmów z klientem, natomiast oferujemy obsługę telefoniczą w pełnym zakresie i w wybranych godzinach przez klienta może to być 24h dziennie lub 1h dziennie w wyznaczonych godzinach, nr. telefonu stacjonarny lub komórkowy, obsługa telefoniczna jest zaautomatyzowana gdy klient dzwoni z telefonu który jest w ustawieniach konta allegro operatorowi od razu pojawią się wszystkie informacje o kliencie, zakupionych produktach, emaile które przesłał.
            </p>
            <p class="lead">Obsługa sms na życznie można wysyłać oferty reklamowe/kupony na numery klientów jeżeli wyrażą na to zgodę, można również informować o etapach dostawy lub odpowiadać bezpośrednio na pytania zadane z innych źródeł jak email lub telefon</p>

            <p class="lead">Faktury są generowane automatycznie do każdego zamówienia mogą również być generowane tylko na życzenie tak jak rachunki lub faktury pro forma</p>
            
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" src="{{asset ('img/obsluga.png')}}" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">
        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Pakowanie twoich <span class="text-info">Przesyłek</span></h2>
            <p class="lead">Zakupiony przez twoich klientów towar możemy przesłać do ciebie bez względu na to z ilu hurtowni pochodzą produkty lub spakować go w jednej z naszych pakowalni.</p>
            <p class="lead">Obecnie mamy 2 typy pakowalni: standardową która pakuje przesyłki w magazynie i wersje mobilną która posiada całe wyposażenie w kontenerze 3x3 metry, samochód posiada pełne wyposażenie potrzebne do pakowania przesyłek i obsługi naszej platformy, wersja mobilna jest w stanie pakować przesyłki i wysyłać w ciągu 6h (obecnie tylko w Warszawie) standardowa wykonuje to w ciągu 1-2 dni roboczych.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="{{asset ('img/kurier.png')}}" alt="Generic placeholder image">
          </div>
        </div>
        
               
@endsection