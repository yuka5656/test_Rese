@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/detail.css') }}">
@endsection

@section('content')
<div class="detail__content">
    <div class="detail__content-left">
        <div class="detail__content-top">
            <button onclick="history.back(-1)"><</button>
            <h1>{{ $item->restaurant_name }}</h1>
        </div>
        <div class="detail__content-img">
            <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg" alt="" />
        </div>
        <div class="detail__content-bottom">
            <div class="detail__content-bottom-tag">
                <p class="detail__bottom-tag">#{{ $item->prefecture_name }}</p>
                <p class="detail__bottom-tag">#{{ $item->genre_name }}</p>
            </div>
            <div class="detail__content-text">
                <p>{{ $item->summary }}</p>
            </div>
        </div>
    </div>
    <div class="detail__content-right">
        <div class="detail__content-logo">
            <h2>予約</h2>
        </div>
        <div class="detail__content-form">
            <form action="">
                <div class="content-form__input">
                    <input type="date">
                </div>
                <div class="content-form__input">
                    <select name="" id="">
                        @for($i = 0; $i <= 24; $i++)
                            @for($j = 0; $j <= 5; $j++)
                        <option label="{{$i}}:{{$j}}0" value=""></option>
                            @endfor
                        @endfor
                    </select>
                </div>
                <div class="content-form__input">
                    <input type="number">
                </div>
                <div class="content-form__table">
                    <table>
                        <tr>
                            <td><span>Shop</span></td>
                            <td>店名</td>
                        </tr>
                        <tr>
                            <td><span>Date</span></td>
                            <td>日付</td>
                        </tr>
                        <tr>
                            <td><span>Time</span></td>
                            <td>時間</td>
                        </tr>
                        <tr>
                            <td><span>Number</span></td>
                            <td>人数</td>
                        </tr>
                    </table>
                </div>
                <button>予約する</button>
            </form>
        </div>
    </div>
</div>
@endsection