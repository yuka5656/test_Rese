@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
@endsection

@section('content')
<div class="form-thanks__content">
    <div class="form-thanks__text">
        <p>会員登録ありがとうございます</p>
    </div>
    <div class="form-thanks__button">
        <a href="/login">ログインする</a>
    </div>
</div>
@endsection