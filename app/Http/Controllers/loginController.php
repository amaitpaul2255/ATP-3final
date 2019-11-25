<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    function verify(Request $req)
    {
        if($req->username == $req ->password)
        {
            $req->session()->put('name',$req->username);
            return redirect('/home');
        }
        else
        {
            $req->session()->flash('msg', 'Invalid Request!!');
            return redirect('/login');
        }
       
    }
}
