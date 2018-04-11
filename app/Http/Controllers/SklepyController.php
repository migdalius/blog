<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SklepyController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('sklepy');
    }
}
