<?php

namespace App\Http\Controllers;

class indexController extends Controller
{
   
    public function index()
    {
       /* if(session('user') ==! null){
            return view('index');
        }*/
        return view('index');
    }
  
}
