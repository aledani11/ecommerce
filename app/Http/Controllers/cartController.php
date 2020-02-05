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
        // request()->session()->forget('cart',"2");
        //  request()->session()->pull('cart',2);
        // unset($_COOKIE['cart'][5]);
        // request()->session()->forget('cart.');
        //return session('cart');
        /*foreach (session('cart') as $key => $value) {
            if($value === ""){
            }
          }*/
        //$value = request()->session()->pull('cart');
        // unset($value[]);
        //request()->session()->push('cart', $value);
        /* $cart = session()->pull('cart', []); // Second argument is a default value
        if (($key = array_search(2, $cart)) !== false) {
            unset($cart[$key]);
        }
        session()->put('cart', $cart);*/
        // if (session('user') ==! null) {
        //return view('shop');
        //  return"good done!";
        //} else {
        if (session('cart') !== null) {
            if (in_array(request()->id, session('cart'), true)) {
                return "<div class='alert alert-danger'>
                        <ul>
                            <li>La habitacion ya fue agregada al carrito</li>
                        </ul>
                        </div>";
            }
        }
        if (isset(request()->c_in) && isset(request()->c_out)) {
            if (request()->c_in <= request()->c_out) {
                request()->session()->push('cart', request()->id);
                request()->session()->put('check_in' . request()->id, request()->c_in);
                request()->session()->put('check_out' . request()->id, request()->c_out);
                return "<div class='alert alert-success'>
                        <ul>
                            <li>Habitacion agregada al carrito</li>
                        </ul>
                        </div>";
            } else {
                return "<div class='alert alert-danger'>
                                    <ul>
                                        <li>Fecha de entrada no puede ser mayor a fecha de salida</li>
                                    </ul>
                                    </div>";
            }
        } else {
            return "<div class='alert alert-danger'>
                        <ul>
                            <li>Fecha de entrada o fecha de salida están vacías</li>
                        </ul>
                        </div>";
        }
        //}
        //  return view('shop');  
        // return request()->id;
        // dd(session('cart'));
        //return session('cart');
        //return gettype(session('cart'));
    }

    public function delete()
    {
        $cart = session()->pull('cart', []);
        if (($key = array_search(request()->id, $cart)) !== false) {
            request()->session()->forget('check_in'.request()->id);
            request()->session()->forget('check_out'.request()->id);
            unset($cart[$key]);
        }
        if (count($cart)) {
            session()->put('cart', $cart);
        }
    }

    public function getCart()
    {
        if (session('cart') !== null) {
            $result = null;
            $result3['count'] = 0;
            foreach (session('cart') as $key => $value) {
                $result3['count']++;
                $room = DB::table('rooms')
                    ->select(
                        'rooms.*',
                        'rt.name as room_type'
                    )
                    ->where('rooms.id', '=', $value)
                    ->leftJoin('rooms_type as rt', 'rooms.id_type', '=', 'rt.id')
                    ->get();
                // $result .= $room[0]->title;
                $result .= '<div class="single-cart-item">
                    <a href="#" class="product-image">
                        <img src="/img/product-img/individual.jpg" class="cart-thumb" alt="">
                        <!-- Cart Item Desc -->
                        <div class="cart-item-desc">
                            <span class="product-remove" id="cart_remove" path="' . route('cart.delete') . '" room="' . $room[0]->id . '" style="top:1px;right:5px"><i class="fa fa-close" aria-hidden="true"></i></span>
                            <span class="badge">' . $room[0]->room_type . '</span>
                            <h6 style="margin-bottom:0">' . $room[0]->title . '</h6>
                            <p class="price" style="margin-top:0">$' . $room[0]->price . '</p>
                        </div>
                    </a>
                </div>
                ';
            }
            $result1 = '<div class="cart-list">';
            $result2 = '</div>';
            $result1 .= $result . $result2;
            $result3['details'] = $result1;
            return $result3;
        } else {
            $result['details'] = "";
            $result['count'] = "";
            return $result;
        }
    }
}
