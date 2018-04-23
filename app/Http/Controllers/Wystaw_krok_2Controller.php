<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Konto;

class Wystaw_krok_2Controller extends Controller
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
        $konta = Konto::where('user_id',$userId)->get();

        return view('wystaw_krok_2')->with('konta',$konta);
    }

    public function editKonto(Request $req) {
        $data = Konto::find($req->id);
        
        $data->narzut = $req->narzut;
        $data->dodatek = $req->dodatek;
        
        $data->save();

        return Response()->json($data);
    }
}
