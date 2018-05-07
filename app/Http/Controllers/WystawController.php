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

    public function editKategorie(Request $req){

        $data = Kategorie::find($req->id);
        if(!is_null($req->tag1)){
            $data->tag1 = $req->tag1;
        }
        if(!is_null($req->tag2)){
            $data->tag2 = $req->tag2;
        }
        if(!is_null($req->tag3)){
            $data->tag3 = $req->tag3;
        }
        if(!is_null($req->tag4)){
            $data->tag4 = $req->tag4;
        }
        if(!is_null($req->tag5)){
            $data->tag5 = $req->tag5;
        }
        if(!is_null($req->tag6)){
            $data->tag6 = $req->tag6;
        }
        if(!is_null($req->tag7)){
            $data->tag7 = $req->tag7;
        }
    
        if(!is_null($req->tag8)){
            $data->tag8 = $req->tag8;
        }
        if(!is_null($req->tag9)){
            $data->tag9 = $req->tag9;
        }

        if(!is_null($req->tag10)){
            $data->tag10 = $req->tag10;
        }

        if(is_null($req->tag1) or is_null($req->tag2) or is_null($req->tag3) or is_null($req->tag4) or is_null($req->tag5) or is_null($req->tag6) or is_null($req->tag7) or is_null($req->tag8) or is_null($req->tag9) or is_null($req->tag10)){
            $error = "Drogi użytkowniku pamiętaj możesz zostawić puste pole tag, to jedynie wpłynie na różnorodność nazw";
        }

        $data->save();
        $data->errors = $error;

        return Response()->json($data);
    }   


}
