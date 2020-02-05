<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\loginAuth;
use App\room;

class profileControler extends Controller
{

    function auth()
    {
        if (session('user') !== null) {
            return true;
        }
        return false;
    }
   
    public function index()
    {
        if (!$this->auth()) {
            return redirect()->route('login');
        }
        $result = DB::table('customer')
            ->select(
                'customer.*'
            )
            ->where('customer.email', '=', session('user'))
            ->get();

       return view('profile', ['results' => $result,
                            ]);
    }
  
}
