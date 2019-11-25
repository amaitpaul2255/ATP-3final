<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentController extends Controller
{
    function index()
    {
        $std = $this->studentlist();
        return view('student.index')->with('user', $std);
    }

    function studentlist()
    {
        return
        array(
            ['id'=>'16-22222-1','username'=>'Amaitpaul','password'=>'ab1254'],
            ['id'=>'16-33333-1','username'=>'Abuasif','password'=>'ss1254'],
            ['id'=>'16-11111-1','username'=>'Nabil','password'=>'aa1254'],
            ['id'=>'16-44444-1','username'=>'Sohel','password'=>'asa1254']
        );
    }
    function searchForId($i, $array) {
        foreach ($array as $id){
            if($id['id'] == $i){
                return $id;
            }
        }
        return null;
     }
     
    function details()
    {
        $st = $this->studentlist();
        $link = $_SERVER['PHP_SELF'];
        $link_array = explode('/',$link);
        $page = end($link_array);
        $p = $this->searchForId($page, $st);
        return view('student.details')->with('u',$p);
    }

    function edit()
    {
        $st = $this->studentlist();
        $link = $_SERVER['PHP_SELF'];
        $link_array = explode('/',$link);
        $page = end($link_array);
        $p = $this->searchForId($page,$st);
        return view('student.edit')->with('u',$p);
    }
    function update()
    {
        return redirect()->route('student.index');
    }

    function delete()
    {
        $st = $this->studentlist();
        $link = $_SERVER['PHP_SELF'];
        $link_array = explode('/',$link);
        $page = end($link_array);
        $p = $this->searchForId($page,$st);
        return view('student.delete')->with('u',$p);
    }

    function destroy()
    {
        
        return redirect()->route('student.index');
    }
}
