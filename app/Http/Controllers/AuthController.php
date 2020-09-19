<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function getAuthForm() {
        return view('login');
    }

    public function postAuthForm(Request $request) {

        $login = $request->input('login');
        $password = $request->input('password');

        if($login === "Uriy" && $password === "123qwe"){
            //return redirect()->route('indexRoute');
            return view('/login', ['name' => $login]);
        }

       return view('/login', ['errorMessage' => 'Неправильный логин или пароль']);
    }
}
