@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
<!-- 人型 -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<!-- <span class="material-symbols-outlined">person</span> -->
<!-- email -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<!-- password -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
@endsection

@section('content')

@foreach ($errors->all() as $error)
<li class="form__error">{{$error}}</li>
@endforeach

<div class="login-form__content">
    <div class="login-form__inner">
        <div class="login-form_logo">
            <p>Login</p>
        </div>
        <form action="/login" class="form" method="post">
        @csrf
            <div class="form__group">
                <div class="form__group-content">
                    <span class="material-symbols-outlined" style="position: absolute;
                    top: 33%; left:10%;" >mail</span>
                    <input class="group__input" type="email" name="email" value="{{ old('email') }}" placeholder="Email">
                </div>
                <div class="form__group-content">

                    <span class="material-symbols-outlined"style="position: absolute;
                    top: 58%; left:10%;">lock</span>
                    <input class="group__input" type="password" name="password" placeholder="Password">
                </div>
                <div class="form__group-login">
                    <button type="submit">ログイン</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection