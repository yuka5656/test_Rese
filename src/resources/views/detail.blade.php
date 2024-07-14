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
            <form method="POST" action="/detail/create">
            @csrf
                <div class="content-form__input">
                    <input type="date" name="date" value="<?php echo date('Y-m-d'); ?>" onChange="this.form.day.value=this.form.date.value">
                </div>
                <div class="content-form__input">
                    <select name="time" onChange="this.form.unit.value=this.options[selectedIndex].text">
                        <option label="" value="00:00">00:00</option>
                        <option label="" value="01:00">01:00</option>
                        <option label="" value="02:00">02:00</option>
                        <option label="" value="03:00">03:00</option>
                        <option label="" value="04:00">04:00</option>
                        <option label="" value="05:00">05:00</option>
                        <option label="" value="06:00">06:00</option>
                        <option label="" value="07:00">07:00</option>
                        <option label="" value="08:00">08:00</option>
                        <option label="" value="09:00">09:00</option>
                        <option label="" value="10:00">10:00</option>
                        <option label="" value="11:00">11:00</option>
                        <option label="" value="12:00">12:00</option>
                        <option label="" value="13:00">13:00</option>
                        <option label="" value="14:00">14:00</option>
                        <option label="" value="15:00">15:00</option>
                        <option label="" value="16:00">16:00</option>
                        <option label="" value="17:00">17:00</option>
                        <option label="" value="18:00">18:00</option>
                        <option label="" value="19:00">19:00</option>
                        <option label="" value="20:00">20:00</option>
                        <option label="" value="21:00">21:00</option>
                        <option label="" value="22:00">22:00</option>
                        <option label="" value="23:00">23:00</option>
                    </select>
                </div>
                <div class="content-form__input">
                    <select name="number_of_people"
                    onChange="this.form.number.value=this.options[selectedIndex].text">
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
                            <td><input name="day" style="border: none;
                            margin-left: 1px;
                            margin-bottom: 1px;
                            background-color: #4C7EFF;
                            color: #fff;
                            font-size: 17px;" readonly></td>
                        </tr>
                        <tr>
                            <td><span>Time</span></td>
                            <td><input name="unit" style="border: none;
                            margin-left: 1px;
                            margin-bottom: 1px;
                            background-color: #4C7EFF;
                            color: #fff;
                            font-size: 17px;" readonly></td>
                        </tr>
                        <tr>
                            <td><span>Number</span></td>
                            <td><input name="number" style="border: none;
                            margin-left: 1px;
                            margin-bottom: 1px;
                            background-color: #4C7EFF;
                            color: #fff;
                            font-size: 17px;" readonly></td>
                        </tr>
                    </table>
                </div>
                <input type="hidden" class="input" name="user_id" value="{{ Auth::user()->id }}">
                <input type="hidden" name="restaurant_id" value="{{ $item->id }}">
                <button type="submit">予約する</button>
            </form>
        </div>
    </div>
</div>
@endsection