@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
<!-- 虫眼鏡 -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<!-- ハート -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
@endsection

@section('header')
<div class="header-form__content">
    <form action="/" method="get" class="header-form__content-search">
        <select class="header-form__search-select" name="prefecture_id" id="">
            <option value="">All area</option>
            @foreach ($prefectures as $prefecture)
            <option value="{{ $prefecture->id }}">{{ $prefecture->prefecture_name }}</option>
            @endforeach
        </select>
        <select name="genre_id" id="" class="header-form__search-select">
            <option value="">All genre</option>
            @foreach ($genres as $genre)
            <option value="{{ $genre->id }}">{{ $genre->genre_name }}</option>
            @endforeach
        </select>
        <button style="border:none"><span class="material-symbols-outlined">search</span></button>
        <input type="text" name="keyword" class="header-form__search-input" placeholder="Search..." value="{{ $keyword }}">
    </form>
</div>
@endsection

@section('content')
@foreach ($restaurants as $restaurant)
<div class="card">
    <div class="card-item">
        <div class="card__img">
            <img src="{{ $restaurant->image_url }}" alt="" />
        </div>
        <div class="card__content">
            <div class="card__content-cat">
                <p>{{ $restaurant->restaurant_name }}</p>
            </div>
            <div class="card__content-tag">
                <p class="card__content-tag-text">#{{ $restaurant->prefecture_name }}
                </p>
                <p class="card__content-tag-text">#{{ $restaurant->genre_name }}</p>
            </div>
            <a href="/detail/{id}, ['id'=>$restaurant->id]" class="card__content-tag-item card__content-tag-item--button">
                詳しく見る
            </a>
            <span class="material-symbols-outlined">
                favorite
            </span>
        </div>
    </div>
</div>
@endforeach
@endsection