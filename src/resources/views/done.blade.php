@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/done.css') }}">
@endsection

@section('content')
<div class="form-done__content">
    <div class="form-done__text">
        <p>ご予約ありがとうございます</p>
    </div>
    <div class="form-done__button">
        <a href="/">戻る</a>
    </div>
</div>
@endsection