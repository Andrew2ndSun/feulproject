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
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {


        if(Auth::user()->level==0)//admin
             return redirect('/admin/fuel');
        else return  redirect('/');


    }
     public function about()
    {
         return view('HomePage.about');
    }

     public function contact()
    {
        return view('HomePage.contact');
    }


}
