<?php

namespace App\Http\Controllers;

class index_adminController extends Controller
{
   
    public function index()
    {
        if(session('user') !== null){
            return view('index');
        }
        if(session('admin') !== null){
            return view('index_admin');
        }
        if(session('s_admin') !== null){
            return view('index_admin');
        }
        return view('login_admin');
    }
  
}
