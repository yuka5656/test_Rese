@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
<!-- ハート -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
@endsection

@section('content')
<div class="card">
    <div class="card__img">
        <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg" alt="" />
    </div>
    <div class="card__content">
        <div class="card__content-cat">
            <p>店名</p>
        </div>
        <div class="card__content-tag">
            <p class="card__content-tag-text">#エリア</p>
            <p class="card__content-tag-text">#ジャンル</p>
        </div>
        <button class="card__content-tag-item card__content-tag-item--button">
            詳しく見る
        </button>
        <span class="material-symbols-outlined">
            favorite
        </span>
    </div>
</div>
@endsection