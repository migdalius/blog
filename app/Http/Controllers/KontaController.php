<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Konto;
use App\Allegro\AllegroWebAPI;
use Illuminate\Database\QueryException;

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
        
        //próbuje się zalogować
        define('ALLEGRO_LOGIN', request('login'));
        define('ALLEGRO_PASSWORD', request('password'));
        define('ALLEGRO_KEY', request('webapi'));

        $allegro_web_api_instance = new AllegroWebAPI();
        $message = $allegro_web_api_instance->LoginEnc();

        $try_login = Konto::all()->where('login', request('login'));
        //Zapisuje do bazy danych
        if($message === 'Zalogowano poprawnie'){
<<<<<<< HEAD
            if(!$try_login){
                try{
                    Konto::create([
                    'login' => request('login'),
                    'password' => request('password'),
                    'webapi' => request('webapi'),
                    'narzut' =>request('narzut'),
                    'dodatek' =>request('dodatek'),
                    'user_id' => auth()->id()
                    ]); 
                }
                catch(QueryException $e){

                    $error_code = $e->errorInfo[1];
                    if($error_code == 1062){
                        $message = "Konto ".ALLEGRO_LOGIN." zostało już wprowadzone";
                    }
                }
            }
            else{
                $message = "Konto ".ALLEGRO_LOGIN." zostało już wprowadzone";
            }
=======
            try{
                Konto::create([
                'login' => request('login'),
                'password' => request('password'),
                'webapi' => request('webapi'),
                'narzut' =>request('narzut'),
                'dodatek' =>request('dodatek'),
                'user_id' => auth()->id()
                ]); 
            }
            catch(QueryException $e){

                $error_code = $e->errorInfo[1];
                if($error_code == 1062){
                    $message = "Konto ".ALLEGRO_LOGIN." zostało już wprowadzone";
                }
            }
>>>>>>> ed0808031e557034abe5776517cbb682cf443d8d
        }
       
        //Przekierowuje do ścieżki /konta
        return redirect('/konta')->with('message', $message);
    }


}
