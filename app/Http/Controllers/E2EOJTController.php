<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class E2EOJTController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:e2e_ojt');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('e2e_ojt');
    }
}
