<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\register_adminStore;
use Illuminate\Support\Facades\Hash;

class register_adminController extends Controller
{

    public function index()
    {
        if (session('user') !== null) {
            return view('index');
        }
        if (session('s_admin') !== null) {
            return view('register_admin');
        }
        if (session('admin') !== null) {
            return view('index_admin');
        }
        return view('login_admin');
    }

    public function store(register_adminStore $request)
    {

        $id = DB::table('admins')->insertGetId(
            [
                'name' => request()->nya, 'email' => request()->email,
                'password' => Hash::make(request()->pass),
                'created' => now()
            ]
        );

        $request->session()->flash('success', 'Usuario creado con éxito!');

        return redirect()->route('users_admin');
    }
}
