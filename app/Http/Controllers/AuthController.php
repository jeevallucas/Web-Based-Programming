<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function simpan(Request $request)
    {
        User::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        return redirect('/');
    }

    public function login()
    {
        return view('login');
    }

    public function ceklogin(Request $request)
    {
        if (
            Auth::attempt([
                'email' => $request->email,
                'password' => $request->password
            ])
        ) {
            return redirect('/home');
        } else {
            return redirect('/');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}