@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
<!-- ハート -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
@endsection
<!-- バツ -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<!-- 時計 -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

@section('content')
<div class="mypage__name-title">
<h1>{{ Auth::user()->name }}さん</h1>
</div>
<div class="mypage__reservation">
    <div class="mypage__reservation-content">
        <div class="mypage__reservation-title">
            <h2>予約状況</h2>
        </div>
        @foreach ($reservations as $reservation)
        <div class="mypage__reservation-group">
            <div class="mypage__reservation-group-top"
            style="display: flex;
                align-items: center;
                position: relative;">
                <span class="material-symbols-outlined"
                style="
                margin-right: 15px;
                ">
                schedule
                </span>
                <p>予約</p>
                <form method="POST" action="/my_page/delete?id={{ $reservation->id }}">
                @csrf
                    <button style="
                            position: absolute;
                            top: 28%; left:180%;
                            background-color: #305DFF;
                            border: none;">
                        <span class="material-symbols-outlined" style="color: #fff;
                            font-size: 30px;
                        ">cancel</span>
                    </button>
                </form>
            </div>
            <div class="mypage__reservation-group-table">
                <table style="color: #fff;">
                    <tr>
                        <td><span>Shop</span></td>
                        <td>{{ $reservation->restaurant_id }}</td>
                    </tr>
                    <tr>
                        <td><span>Date</span></td>
                        <td>{{ $reservation->date }}</td>
                    </tr>
                    <tr>
                        <td><span>Time</span></td>
                        <td>{{ $reservation->time }}</td>
                    </tr>
                    <tr>
                        <td><span>Number</span></td>
                        <td>{{ $reservation->number_of_people }}</td>
                    </tr>
                </table>
            </div>
        </div>
        @endforeach
    </div>
    <div class="card-group">
        <div class="card-title">
            <h2>お気に入り店舗</h2>
        </div>
        @foreach ($favorites as $favorite)
        <div class="card-item">
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
            @endforeach
        </div>
    </div>
</div>
@endsection