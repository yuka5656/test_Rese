<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(){

        return view('index');
    }

    public function login(){

        return view('auth.login');
    }

    public function thank(){

        return view('auth.thanks');
    }

    public function my_page(){
        
        return view('mypage');
    }

    public function done(){
        
        return view('done');
    }
}
