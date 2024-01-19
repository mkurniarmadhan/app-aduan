<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //

    public function login()
    {

        return view('auth.login');
    }
    public function daftar()
    {

        return view('auth.daftar');
    }

    public function doLogin(Request $request)
    {

        $user = $request->validate([
            'email' => ['email', 'required'],
            'password' => ['required'],
        ]);
        $cek =  Auth::attempt($user);




        return to_route('home');
    }

    public function doDaftar(Request $request)
    {

        $data =   $request->validate(
            [
                'nama' => 'required',
                'email' => 'required',
                'no_telpon' => 'required',
                'alamat' => 'required',
                'password' => 'required',
            ]
        );
        $data['password'] = bcrypt($data['password']);

        $user =   User::create(
            $data
        );


        Auth::login($user);

        return to_route('pelapor.index');
    }

    public function logout()
    {
        Auth::logout();

        return to_route('home');
    }
}
