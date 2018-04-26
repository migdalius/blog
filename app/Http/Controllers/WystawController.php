<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategorie;

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
        
        $kategorie = Kategorie::where('user_id',$userId)->get();

        return view('wystaw')->with('kategorie',$kategorie);
    }



}
