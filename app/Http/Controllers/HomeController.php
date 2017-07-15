<?php

namespace App\Http\Controllers;

use App\Manager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->role == 'manager'){
            $manager = Manager::where('email','=',Auth::user()->email)
                    ->get();

            return view('managers.view',['manager'=>$manager]);
        }
        return view('home');
    }
}
