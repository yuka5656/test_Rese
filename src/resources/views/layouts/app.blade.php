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
        <div class="menu-container">
            <input type="checkbox" id="menu-toggle">
            <nav class="menu">
                    <ul>
                        <li>
                            <a href="/">Home</a>
                        </li>
                        <li>
                            @guest
                            <a class="header-nav__link" href="/register">Registration</a>
                            @endguest
                            @if (Auth::check())
                            <form class="form" action="/logout" method="post">
                            @csrf
                                <button class="header-nav__button">Logout</button>
                            </form>
                            @endif
                        </li>
                        <li>
                            @guest
                            <a href="/login">Login</a>
                            @endguest
                            @if (Auth::check())
                            <a href="/my_page">Mypage</a>
                            @endif
                        </li>
                    </ul>
                </nav>
                <label for="menu-toggle" class="menu-button">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </label>
            @yield('header')
        </div>
        <a href="/" style="
            color: blue;
            text-decoration: none;
            font-size: 30px;
            font-weight: bold;
            display: inline-block;
            margin-top: 13px;
            margin-left: 50px;
            ">Rese</a>
    </header>
    <main>
        @yield('content')
    </main>
</body>

