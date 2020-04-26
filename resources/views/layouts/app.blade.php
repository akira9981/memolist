<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Memolist</title>

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sign_up.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/sign_in.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/top.css') }}" rel="stylesheet">
    <link href="{{ asset('css/button.css') }}" rel="stylesheet">
    <link href="{{ asset('css/common.css') }}" rel="stylesheet">
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/card_edit.css') }}" rel="stylesheet">
    <link href="{{ asset('css/card_new.css') }}" rel="stylesheet">
    <link href="{{ asset('css/card_show.css') }}" rel="stylesheet">
    <link href="{{ asset('css/list_new.css') }}" rel="stylesheet">
    <link href="{{ asset('css/list_edit.css') }}" rel="stylesheet">
    <link href="{{ asset('css/hamburger.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<body>
@auth
<header class="header">
  <nav class="nav">
    <ul class="header_menu">
      <li class="nav-link">{{Auth::user()->name }}さん</li>
      <li class="header_menu_title">
          <a class="nav-link listNew" href="/">MemoList</a>
      </li>
      <li>
        <ul class="header_menu_inner">
          <nav class="global-nav">
            <ul class="global-nav__list">
              <li class="global-nav__item"><a href="">メニュー1</a></li>
              <li class="global-nav__item"><a href="">メニュー2</a></li>
              <li class="global-nav__item"><a href="">メニュー3</a></li>
              <li class="global-nav__item"><a href="">メニュー4</a></li>
              <li class="global-nav__item"><a href="">メニュー5</a></li>
            </ul>
          </nav>
          <div class="hamburger" id="js-hamburger">
            <span class="hamburger__line hamburger__line--1"></span>
            <span class="hamburger__line hamburger__line--2"></span>
            <span class="hamburger__line hamburger__line--3"></span>
          </div>
          <div class="black-bg" id="js-black-bg"></div>
          <li>
              <a class="nav-link listNew" href="{{ route('new') }}">リストを作成</a>　　
          </li>
          <li>
              <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                ログアウト
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
              </form>
          </li>
        </ul>
      </li>
    </ul>
  </nav>
</header>
@endauth
@yield('content')
<footer class="footer">
  <div class="writing-instrument">
    <div class="pen">
      <div class="pen1"></div>
      <div class="pen2"></div>
    </div>
    <div class="keshi">
      <div class="keshi1"></div>
      <div class="keshi2"></div>
    </div>
  </div>
</footer>
</body>
</html>