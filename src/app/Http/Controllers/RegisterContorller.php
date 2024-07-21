<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AuthorRequest;

use App\Providers\RuteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class RegisterContorller extends Controller
{

    public function register(Request $request){

        return view('thanks');
    }

}
