<?php

namespace App\Http\Controllers;

use App\Abt;
use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $usr = auth()->user()->name;
        $data = Abt::where('Name','=',$usr)->get()[0];
        return view('home',compact('data') );
        // return view('auth.login');
        // return view('home');
    }
}
