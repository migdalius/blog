<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Konto;

class WystawController extends Controller
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

        return view('wystaw')->with('konta',$konta);
    }



}
