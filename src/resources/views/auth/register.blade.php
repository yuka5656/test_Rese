@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
<!-- 人型 -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<!-- email -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<!-- password -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
@endsection

@section('content')
<div class="register-form__content">
    <div class="register-form__inner">
        <div class="register-form_logo">
            <p>Register</p>
        </div>
        <form action="/register" class="form" method="post">
        @csrf
            <div class="form__group">
                <div class="form__group-content">
                    <span class="material-symbols-outlined" style="position: absolute;
                    top: 28%; left:10%;">person</span>
                    <input class="group__input" type="name" name="name" placeholder="UseName" value="{{ old('name') }}" />
                </div>
                <div class="form__error">
                    @error('password')
                    {{ $message }}
                    @enderror
                </div>
                <div class="form__group-content">
                    <span class="material-symbols-outlined" style="position: absolute;
                    top: 47%; left:10%;" >mail</span>
                    <input class="group__input" type="email" name="email" placeholder="Email" value="{{ old('email') }}" />
                </div>
                <div class="form__error">
                    @error('email')
                    {{ $message }}
                    @enderror
                </div>
                <div class="form__group-content">
                    <span class="material-symbols-outlined"style="position: absolute;
                    top: 66%; left:10%;">lock</span>
                    <input class="group__input" type="password" name="password" placeholder="Password">
                </div>
                <div class="form__error">
                    @error('password')
                    {{ $message }}
                    @enderror
                </div>
                <div class="form__group-content">
                    <input class="form__group-input" type="password" name="password_confirmation" placeholder="確認用パスワード">
                </div>
                <div class="form__group-register">
                    <button type="submit">登録</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection