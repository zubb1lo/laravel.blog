<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){

        /*
        $iUser = [
            'data' => [
                'name' => 'Uriy',
                'surname' => 'Starikov'
            ]
        ];
        return $iUser;
        */
        return view('welcome');

    }

    public function blog(){
        return view('main_blog');

    }

    public function about(Request $request, $id = null){

        $a = $request->input('a');
        return view('about', ['a' => $a, 'id' => $id]);

    }
}
