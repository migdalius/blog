<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DostawcaPreviewController extends Controller
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


    public function index(){
    	return view('dostawca_preview');
    }

    public function load(Request $req){
        ini_set('max_execution_time', '300');
        $url = $req->xmlLink;
        $xmlString = file_get_contents($url);
        dd($xmlString);
        return view('dostawca_preview')->with('xmlString', $xmlString);
    }
}
