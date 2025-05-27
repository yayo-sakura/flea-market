@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
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
<div class="profile-form">
    <div class="profile-form__img">
    <output id="list" class="image_output"></output>
    <h2 class="profile-form__heading">ユーザー名</h2>
    <a class="profile__link" href="/mypage/profile">プロフィールを編集</a>
<div class="product-content">
    <div class=product-recommend>
        <a href="/products/detail/{{$product->id}}" class="product-link">出品した商品</a>
        <img src="{{ asset($product->image) }}"  alt="商品画像" class="img-content"/>
        <div class="detail-content">
            <p>{{$product->name}}</p>
        </div>
    </div>
    <div class=product-mylist>
        <a href="/products/detail/{{$product->id}}" class="product-link">購入した商品</a>
        <img src="{{ asset($product->image) }}"  alt="商品画像" class="img-content"/>
        <div class="detail-content">
            <p>{{$product->name}}</p>
        </div>
    </div>
</div>