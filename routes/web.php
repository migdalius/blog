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

// zakładka /konta //
Route::get('/konta', 'KontaController@index')->name('konta');

Route::get('/konta/dodaj', 'KontaController@create')->name('dodaj_konta');

Route::post('/konta', 'KontaController@store');


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



