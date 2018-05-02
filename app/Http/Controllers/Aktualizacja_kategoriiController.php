<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategorie;

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
        $userId = \Auth::user()->id;
        $kategorie = Kategorie::where('user_id',$userId)->pluck('kategoria');;
        return view('aktualizacja_kategorii')->with('kategorie', $kategorie);
    }


    public function update(Request $req)
    {
        $data = new Kategorie;
        $data->dostawca = 'czasna';
        $data->kategoria = $req->kategoria;
        $data->user_id = auth()->id();
        $data->tag1 = '';
        $data->tag2 = '';
        $data->tag3 = '';
        $data->tag4 = '';
        $data->tag5 = '';
        $data->tag6 = '';
        $data->tag7 = '';
        $data->tag8 = '';
        $data->tag9 = '';
        $data->tag10 = '';
        $data->save();
        //wgrywamy do bd
        //zwracamy view gdzie się wyświetlają dodane kategorie
        return Response()->json($data);
    }

}
