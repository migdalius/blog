@extends('layouts.strona')

@section('content')
<br>
<br>
<br>
<br>
<div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Warunki współpracy</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">1.Plik xml lub api</h6>
                <small>zawierający tytuł produktu, opis, cenę netto lub brutto, stan magazynowy, zdjęcia na białym tle, parametry dodatkowe np: rozmiar wkładki, kolor.</small>
              </div>
              <span class="text-muted"></span>
            </li>
            <li class="list-group-item d-flex justify-content-between bg-light">
              <div>
                <h6 class="my-0">2. Wysyłka tego samego dnia</h6>
                <small>produkty muszą być wysyłane tego samego dnia w którym zostały zamówione, np: do godziny 10:00/9:00 rano, mogą być wysyłane za pobraniem.</small>
              </div>
              <span class="text-muted"></span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">3. Zwrot towaru</h6>
                <small>Możliwość zwrócenia towaru w czasie 14/30 dni roboczych od otrzymania produktów.</small>
              </div>
              <span class="text-muted"></span>
            </li>
            <li class="list-group-item d-flex justify-content-between bg-light">
              <div>
                <h6 class="my-0">4. Reklamacje</h6>
                <small>Reklamacje zniszczonych produktów w transporcie lub braków w przesyłce muszą być rozpatrzone w ciągu 14 dni roboczych.</small>
              </div>
              <span class="text-success"></span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">5. Oferowane produkty</h6>
                <small>Produkty ze zgodnymi stanami magazynowymi powinny znajdować się w firmie nie mogą być sprowadzane od firm trzecich, dodatkowo ilość unikatowych produktów powinna wynosić przynajmniej 1000 pozycji.</small>
              </div>
              <span class="text-success"></span>
            </li>
          </ul>
          <!-- środek -->
        </div>
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Formularz (Hurtownie)</h4>
          <form class="needs-validation" novalidate>

            <div class="mb-3">
              <label for="username">Nazwa firmy</label>
              <div class="input-group">
                <div class="input-group-prepend">
                </div>
                <input type="text" class="form-control" id="username" placeholder="np: Pezoi sp. z o.o." required>
                <div class="invalid-feedback" style="width: 100%;">
                  Nazwa firmy jest wymagana.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Adres email <span class="text-muted">(Optional)</span></label>
              <input type="email" class="form-control" id="email" placeholder="np: kontakt@pezoi.pl">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="mb-3">
              <label for="address">Ulica i numer budynku/lokalu</label>
              <input type="text" class="form-control" id="address" placeholder="np: Al. Jerozolismie 2/207" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>
            <div class ="row">
            <div class="col-md-6 mb-3">
              <label for="address2">Miasto</label>
              <input type="text" class="form-control" id="address2" placeholder="np: Warszawa">
            </div>
             <div class="col-md-3 mb-3">
                <label for="zip">Kod pocztowy</label>
                <input type="text" class="form-control" id="zip" placeholder="np: 00-690" required>
                <div class="invalid-feedback">
                  Zip code required.
                </div>
              </div>
            </div>
            <hr class="mb-4">
            <h4 class="mb-3">Api lub xml</h4>
            <div class="mb-3">
              <label for="email">Link do pliku xml</label>
              <input type="email" class="form-control" id="email" placeholder="http://pakowalnie.pl/downloads/products.xml">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>
            <div class="mb-3">
              <label for="email">link xml (2) <span class="text-muted">(Opcjonalnie jeżeli jest wersja full i light)</span></label>
              <input type="email" class="form-control" id="email" placeholder="http://www.pakowalnie.pl/edi/export-offer.php?client=test@test.com&token=8ce20b128836df2f306233a&shop=2&type=light&format=xml&iof_2_6 ">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>
            <h5> lub</h5>
            <div class="mb-3">
              <label for="email">Link do Api</label>
              <input type="email" class="form-control" id="email" placeholder="np: http://pakowalnie.pl/api/key=D87bk383KLSd345">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>


            <hr class="mb-4">

            
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="same-address">
              <label class="custom-control-label" for="same-address">Wyrażam zgodę na używanie zdjęć produktów z załączonych plików i opisów</label>
            </div>

            
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Prześlij</button>
          </form>
        </div>
      </div>

@endsection