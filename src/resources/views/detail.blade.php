@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/detail.css') }}">
@endsection

@section('content')
<div class="detail__content-left">
    <div class="detail__content-top">
        <button onclick="history.back(-1)"><</button>
        <h1>店名</h1>
    </div>
    <div class="detail__content-img">
        <img src="https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg" alt="" />
    </div>
    <div class="detail__content-bottom">
        <div class="detail__content-bottom-tag">
            <p class="detail__bottom-tag">#エリア</p>
            <p class="detail__bottom-tag">#ジャンル</p>
        </div>
        <div class="detail__content-text">
            <p>料理長厳選の食材から作る寿司を用いたコースをぜひお楽しみください。食材・味・価格、お客様の満足度を徹底的に追及したお店です。特別な日のお食事、ビジネス接待まで気軽に使用することができます。</p>
        </div>
    </div>
</div>
<div class="detail__content-right">

</div>
@endsection