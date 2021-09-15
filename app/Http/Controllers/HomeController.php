<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function login(Request $request)
	{
		$data = $request->only('email', 'password');
		if(Auth::attempt($data, $request->has('remember_token')))
		{ 
			return redirect()->route('home');
		}
		else
		{
			return redirect()->route('login');
		}
	}

    public function logOut() {
        if(Auth::check())
		{
			Auth::logout();
			return redirect()->route('homepage');
		}
    }
}
