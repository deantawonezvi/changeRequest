<?php

namespace App\Http\Controllers;

use App\LineManager;
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

        $managers = Manager::get();
        $line_manager = LineManager::where('department','=',Auth::user()->department)
                                    ->get();

        return view('home', array('managers'=>$managers,
            'line_managers'=>$line_manager));
    }
}
