<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\AllegroOAuth2Client;


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
    	$auth = new AllegroOAuth2Client();
    	$auth_uri = $auth->getAuthorizationUri();
        return view('allegro_fun')->with('auth_uri', $auth_uri);
    }

    public function login(){
    	// Indywidualne parametry można podać do konstruktora w postaci tablicy, lub bezpośrednio w definicji klasy.
		$auth = new AllegroOAuth2Client();
		// Dobrze byłoby sprawdzić od kogo przychodzi żądanie
		if (!empty($_GET['code'])) {
		  try
		  {
		    $result = $auth->tokenRequest($_GET['code']);
		    //echo 'Twój Access Token: ' . $result->access_token . '.';
		  }
		  catch(Exception $e)
		  {
		    echo $e->getMessage();
		  }
		} else {
		  echo '<a href="'.$auth->getAuthorizationUri().'">Zaloguj do Allegro</a>';
		}

    	/*error_reporting(E_ALL);
    	ini_set('display_errors', 1);
		$hand = curl_init();

		curl_setopt($hand, CURLOPT_URL, 'https://allegro.pl/auth/oauth/authorize?response_type=code&client_id=890e9a6d-ca9e-4451-94bc-dd94111a3b7e&api-key=eyJjbGllbnRJZCI6Ijg5MGU5YTZkLWNhOWUtNDQ1MS05NGJjLWRkOTQxMTFhM2I3ZSJ9.HjBio8kU232h2aAIpO4q3t0tR5J_qAO2O_zfzqVU0JM=&redirect_uri=http://127.0.0.1:8000/allegro_fun');
		//curl_setopt($hand, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($hand, CURLOPT_HEADER, 0);
		
		//curl_setopt($hand, CURLOPT_POST, 1); //it means we are doing post request
		//$post_data ='title=CURL&action=edit'; or $post_data= array('name'=>'dasza', 'surname'=>'karabeu')
		//curl_setopt($hand, CURLOPT_POSTFIELDS, $post_data );

		//curl_setopt($hand, CURLOPT_SSL_VERIFYPEER, false); //for https protocols
	    curl_exec($hand);
		//print_r($output);
		curl_close($hand);*/

		return view('allegro_fun')->with('result', $result);

    }
}

