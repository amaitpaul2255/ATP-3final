<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    function index(Request $req)
   {
       if($req->session()->has('name'))
       {
        return view('home.index');
       }
       else
       {
           return redirect('/login');
       }
       
   }
}
