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
            <img src="{{ $item->image_url }}" alt="" />
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
                        <option label="" value="">00:00</option>
                        <option label="" value="">01:00</option>
                        <option label="" value="">02:00</option>
                        <option label="" value="">03:00</option>
                        <option label="" value="">04:00</option>
                        <option label="" value="">05:00</option>
                        <option label="" value="">06:00</option>
                        <option label="" value="">07:00</option>
                        <option label="" value="">08:00</option>
                        <option label="" value="">09:00</option>
                        <option label="" value="">10:00</option>
                        <option label="" value="">11:00</option>
                        <option label="" value="">12:00</option>
                        <option label="" value="">13:00</option>
                        <option label="" value="">14:00</option>
                        <option label="" value="">15:00</option>
                        <option label="" value="">16:00</option>
                        <option label="" value="">17:00</option>
                        <option label="" value="">18:00</option>
                        <option label="" value="">19:00</option>
                        <option label="" value="">20:00</option>
                        <option label="" value="">21:00</option>
                        <option label="" value="">22:00</option>
                        <option label="" value="">23:00</option>
                    </select>
                </div>
                <div class="content-form__input">
                    <select name="" id="">
                        <option value="1">1人</option>
                        <option value="2">2人</option>
                        <option value="3">3人</option>
                        <option value="4">4人</option>
                        <option value="5">5人</option>
                        <option value="6">6人</option>
                        <option value="7">7人</option>
                        <option value="8">8人</option>
                        <option value="9">9人</option>
                        <option value="10">10人</option>
                    </select>
                </div>
                <div class="content-form__table">
                    <table>
                        <tr>
                            <td><span>Shop</span></td>
                            <td>{{ $item->restaurant_name }}</td>
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