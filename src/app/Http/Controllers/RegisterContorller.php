<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AuthorRequest;

use App\Providers\RuteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

// use App\Http\Controllers\Controller;
// use App\Providers\RouteServiceProvider;
// use Illuminate\Foundation\Auth\AuthenticatesUsers;


class RegisterContorller extends Controller
{

    public function register(Request $request){

        return view('register');
    }


    public function redirectPath(){
        
        return 'thanks';
    }
}
