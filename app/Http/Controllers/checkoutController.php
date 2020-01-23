<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\loginAuth;

class checkoutController extends Controller
{
    public function index()
    {
        if (session('cart') !== null) {
            $result = DB::table('rooms')
                ->select(
                    'rooms.*',
                    'rt.name as room_type'
                )
                ->whereIn('rooms.id', session('cart'))
                ->leftJoin('rooms_type as rt', 'rooms.id_type', '=', 'rt.id')
                ->get();
            $total = 0;
            $item=[];
            foreach ($result as $key => $value) {
                $total += $result[$key]->price;
                $item[$key]= "{name:'".$result[$key]->title."' ,unit_amount:{value:'".$result[$key]->price."', currency_code: 'USD'} ,quantity:'1'}";
                //$item[]= (['name' => ''.$result[$key]->title.'', 'unit_amount' => '{value:'.''.$result[$key]->price.''.', currency_code:'.''.'USD'.''.' }','quantity'=>'1']);
                //$item[]= (['name' => ''.$result[$key]->title.'', 'unit_amount' => '{value:'.$result[$key]->price.', currency_code:'.'USD'.' }','quantity'=>'1']);
            }
//dump($result);
//dd($item);
            return view('checkout', [
                'results' => $result,
                'total' => $total,
                'items' => $item
            ]);
        }
        return view('checkout', ['total' => 0]);
    }
}
