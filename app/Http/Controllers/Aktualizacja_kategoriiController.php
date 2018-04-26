<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Aktualizacja_kategoriiController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('aktualizacja_kategorii');
    }


    public function update()
    {
        include(app_path() . '\Functions\xmlExtract.php');
        //zwracamy kategorie które są w danej xml
        $kategorie = xmlExtractCategories(request('xml'), request('xml_tag'));
        //wgrywamy do bd
        //zwracamy view gdzie się wyświetlają dodane kategorie
        return view('aktualizacja_kategorii')->with('recent_categories', $kategorie);
    }

}
