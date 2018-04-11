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
            <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
          </div>
        </div>
               
@endsection