<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllegroFunController extends Controller
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
    	error_reporting(E_ALL);
    	ini_set('display_errors', 1);
		$hand = curl_init();

		curl_setopt($hand, CURLOPT_URL, 'http://www.google.com');
		//curl_setopt($hand, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($hand, CURLOPT_HEADER, 0);
		//curl_setopt($hand, CURLOPT_POST, 1); //it means we are doing post request
		//$post_data ='title=CURL&action=edit'; or $post_data= array('name'=>'dasza', 'surname'=>'karabeu')
		//curl_setopt($hand, CURLOPT_POSTFIELDS, $post_data );

		//curl_setopt($hand, CURLOPT_SSL_VERIFYPEER, false); //for https protocols
		curl_exec($hand);
		//print_r($output);
		curl_close($hand);

        return view('allegro_fun');
    }
}
