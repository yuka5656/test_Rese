<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Rese</title>

    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/common.css') }}" />
     @yield('css')
</head>

<body>
    <header class="header">
        <div class="header__menu">
            <a href="/register">メニュー</a>
            <a href="/" style="
            color: blue;
            text-decoration: none;
            font-size: 30px;
            font-weight: bold;
            display: inline-block;
            margin-left: 25px;">Rese</a>
            @yield('header')
            <nav>
                <a href="/login">ログイン</a>
                    @if (Auth::check())
                    <ul class="header-nav">
                        <li class="header-nav__item">
                            <a class="header-nav__link" href="/register">登録画面</a>
                        </li>
                        <li class="header-nav__item">
                            <form class="form" action="/logout" method="post">
                            @csrf
                                <button class="header-nav__button">ログアウト</button>
                            </form>
                            
                        </li>
                    </ul>
                    @endif
                </nav>
        </div>
        
    </header>
    <main>
        @yield('content')
    </main>
</body>

