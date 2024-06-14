@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
<!-- 虫眼鏡 -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<!-- ハート -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
@endsection

@section('header')
<h1 class="header__logo">Rese</h1>
<div class="header-form__content">
    <form action="" class="header-form__content-search">
        <select class="header-form__search-select" name="prefectures" id="">
            <option value="">All area</option>
        </select>
        <select name="genres" id="" class="header-form__search-select">
            <option value="">All genre</option>
        </select>
        <button style="border:none"><span class="material-symbols-outlined">search</span></button>
        <input type="text" class="header-form__search-input" placeholder="Search...">
    </form>
</div>
@endsection

@section('content')
<!-- <div class="restaurants__item">
  <div class="restaurant-card__item">
    <div class="restaurant-card__img">
      <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg" alt="" />
    </div>
    <div class="card__content">
      <div class="card__cat">店名</div>
      <h2 class="card__ttl">
        今日の朝ごはんは卵と肉を合わせたバランスの良いメニューです。
      </h2>
      <div class="tag">
        <p class="card__tag">#朝ごはん</p>
    </div>
  </div> -->
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