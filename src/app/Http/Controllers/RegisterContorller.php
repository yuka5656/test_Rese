<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterContorller extends Controller
{

    public function register(){

        return view('register');
    }


    public function redirectPath(){
        return 'thanks';
    }
}
