<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Wystaw_krok_3Controller extends Controller
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
        return view('wystaw_krok_3');
    }
}
