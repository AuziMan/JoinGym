<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Services\Business\UserBS;

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
        
        $bs = new UserBS();
        
        //Obtain data
        $users = $bs->getAll();
        
        if(Auth::user()->role == 'suspended')
        {
            return View('suspendedUser')->with('users', $users);
        }
        else
        {
            return view('home');
            
        }
    }
}
