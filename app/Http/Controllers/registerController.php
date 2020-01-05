<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\registerStore;

class registerController extends Controller
{

    public function index()
    {

        return view('register');
    }

    public function store(registerStore $request)
    {
        // dump(request()->all());

       /* $validatedData = $request->validate([
            'nya' => 'required|max:100',
            'email' => 'unique:customer',
            'direccion' => 'nullable'
        ]);*/

        DB::table('customer')->insert(
            [
                'name' => request()->nya, 'email' => request()->email,
                'password' => request()->pass, 'address' => request()->direccion,
                'contact' => request()->tel
            ]
        );

        return redirect()->route('register');
    }
}
