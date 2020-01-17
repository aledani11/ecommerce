<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\loginAuth;

class cartController extends Controller
{

    public function add()
    {
        //request()->session()->flush();
        if (session('user') == !null) {
            //return view('shop');
            //  return"good done!";
        } else {
            if (session('cart') == !null) {
                if (in_array(request()->id, session('cart'), true)) {
                    return "<div class='alert alert-danger'>
                        <ul>
                            <li>La habitacion ya fue agregada al carrito</li>
                        </ul>
                        </div>";
                }
            }
            request()->session()->push('cart', request()->id);
            return "<div class='alert alert-success'>
                        <ul>
                            <li>Habitacion agregada al carrito</li>
                        </ul>
                        </div>";
        }
        //  return view('shop');  
        // return request()->id;
        // dd(session('cart'));
        //return session('cart');
        //return gettype(session('cart'));
    }
}
