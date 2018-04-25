<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/wystaw', 'WystawController@index')->name('wystaw');

//1. zakładka /konta //
Route::get('/konta', 'KontaController@index')->name('konta');

Route::get('/konta/dodaj', 'KontaController@create')->name('dodaj_konta');

Route::post('/konta', 'KontaController@store');
//1. ##### //

Route::get('/produkty', 'ProduktyController@index')->name('produkty');

Route::get('/sprzedaz', 'SprzedazController@index')->name('sprzedaz');

Route::get('/wystawionych', 'WystawionychController@index')->name('wystawionych');

Route::get('/zamknietych', 'ZamknietychController@index')->name('zamknietych');

Route::get('/instrukcja', 'InstrukcjaController@index')->name('instrukcja');

Route::get('/kontakt', 'KontaktController@index')->name('kontakt');

Route::get('/producenci', 'ProducenciController@index')->name('producenci');

Route::get('/hurtownie', 'HurtownieController@index')->name('hurtownie');

Route::get('/sklepy', 'SklepyController@index')->name('sklepy');

Route::get('/szachownica', 'SzachownicaController@index')->name('szachownica');

Route::get('/uzytkownicy', 'Auth\RegisterController@index')->name('uzytkownicy');


Route::get('/wystaw_krok_2', 'Wystaw_krok_2Controller@index')->name('wystaw_krok_2');

Route::post('/wystaw_krok_2/editKonto', 'Wystaw_krok_2Controller@editKonto')->name('editKonto');

Route::get('/wystaw_krok_3', 'Wystaw_krok_3Controller@index')->name('wystaw_krok_3');

Route::get('/wystaw_krok_4', 'Wystaw_krok_4Controller@index')->name('wystaw_krok_4');

Route::get('/rachunki', 'RachunkiController@index')->name('rachunki');




