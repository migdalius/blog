@extends('layouts.strona')

@section('content')
<br>
<br>
<div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 class="h1">
                    Napisz do nas</h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">
                <form>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Imię</label>
                            <input type="text" class="form-control" id="name" placeholder="Imię" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Adres email</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email" placeholder="email" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Temat</label>
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="na" selected="">Wybierz:</option>
                                <option value="service">Jestem producentem</option>
                                <option value="suggestions">Jestem hurtownikiem</option>
                                <option value="product">Prowadzę sklep internetowy</option>
                                <option value="product">Inny temat</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Twoja wiadomość</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Wiadomość"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                            Wyślij</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <form>
            <legend><span class="glyphicon glyphicon-globe"></span> Nasze biuro</legend>
            <address>
                <strong>Pezoi Sp. z o.o.</strong><br>
                al. Solidarności 117 lok. 207 <br>
                00-140 Warszawa <br>
                <abbr title="Phone">
                    </abbr>
                (+22) 700-98-90-90
            </address>
            <address>
                <strong>Kontakt e-mail</strong><br>
                <a href="mailto:#">Kontakt@pezoi.pl</a>
            </address>
            </form>
        </div>
    </div>
</div>

@endsection