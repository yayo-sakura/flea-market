@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('header')
<header class="header">
    <div class="header__inner">
      <div class="header__logo">
        <h1>
            <img src="../images/logo.svg" alt="COACHTECH">
        </h1>
      </div>
        <form class="form">
            <div class="form__input">
                <input class="keyword" type="text" name="text" placeholder="なにをお探しですか？" >
            </div>
            <nav class="header__nav">
                <ul class=header__list>
                    <li class="header__list-item">
                        <form action="/logout" class="header__form" method="post">
                            @csrf
                            <button class="header__form--logout" type="submit">ログアウト</button>
                        </form>
                    </li>
                    <li class="header__list-item">
                        <form action="/mypage" class="header__form" method="post">
                            @csrf
                            <button class="header__form--mypage" type="submit">マイページ</button>
                        </form>
                    </li>
                    <li class="header__list-item">
                        <form action="/sell" class="header__form" method="post">
                            @csrf
                            <button class="header__form--sell" type="submit">出品</button>
                        </form>
                    </li>
                </ul>
            </nav>
        </form>
    </div>
</header>
@endsection

@section('content')
<div class="product-content">
    <div class=product-recommend>
        <a href="" class="product-link">おすすめ</a>
        <img src=""  alt="商品画像" class="img-content"/>
        <div class="detail-content">
            <p>商品名</p>
        </div>
    </div>
    <div class=product-mylist>
        <a href="" class="product-link">マイリスト</a>
        <img src=""  alt="商品画像" class="img-content"/>
        <div class="detail-content">
            <p>商品名</p>
        </div>
    </div>
</div>