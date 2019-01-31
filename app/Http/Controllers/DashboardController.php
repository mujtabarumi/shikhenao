<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
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
        return view('home');
    }
    public function redirect($route)
    {
        return view('Admin.dashboard');
    }
    public function redirectTo()
    {
//        if (Auth::check()){
//            if (USER_TYPE['student']['code']== Auth::user()->fkuserTypeId){
//
//                return redirect()->route('Login.Redirection',['route'=>]);
//            }
//        }
        return view('Admin.dashboard');
    }
}
