<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Konto;

class KontaController extends Controller
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

        return view('konta')->with('konta',$konta);
    }




     public function create()
    {
        return view('dodaj_konto');
    }




     public function store()
    {

        //dd(request("webapi"));
        //Dodaje nowe konto allegro

        
        //próbuje się zalogować
        //Zapisuje do bazy danych
        Konto::create([
            'login' => request('login'),
            'password' => request('password'),
            'webapi' => request('webapi'),
            'user_id' => auth()->id()
        ]);
        //Przekierowuje do ścieżki /konta

        return redirect('/konta');
    }


}
