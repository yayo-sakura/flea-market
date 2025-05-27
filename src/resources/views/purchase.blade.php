@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/purchase.css') }}">
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
<div class="purchase-content">
    <div class="purchase-puroduct">
        <img src=""  alt="商品画像" class="img-content"/>
    </div>
    <div class="purchase-puroduct__details">
        <h2 class="product-name">商品名</h2>
        <p class="product-price">￥47,000</p>
    </div>
<div class="purchase-content__right">
    <div class="purchase-content__right--payment">
        <p class="purchase-content__right--title">商品代金</p>
        <p class="purchase-content__right--item">￥47,000</p>
    </div>
    <div class="purchase-content__right--payment">
        <p class="purchase-content__right--title">支払い方法</p>
        <p class="purchase-content__right--item">コンビニ払い</p>
    </div>
</div>
</div>
<span class="line"></span>
<form class="purchase-form__form" action="/purchase/:item_id" method="get">
@csrf
    <div class="purchase-form__group">
        <label class="purchase-form__payment-method">支払い方法</label>
            <select class="purchase-form__select" name="category_id" id="">
                <option hidden>選択してください</option>
                <option value="コンビニ払い">コンビニ払い</option>
                <option value="カード支払い">カード支払い</option>
            </select>
                <div class="form__error">
                    @error('Payment')
                    {{ $message }}
                    @enderror
                </div>
    </div>
    <div class="purchase-form__group--right">
        <input class="purchase-form__btn" type="submit" value="購入する">
    </div>
</form>
<span class="line"></span>
<form class="payment-form__form" action="/purchase/:item_id" method="get">
@csrf
    <div class="payment-form__group">
        <label class="payment-form__address">配送先</label>
        <a class="change__link" href="">変更する</a>
        <input class="payment-form__input" type="address" name="address" id="address">
            <div class="form__error">
                    @error('address')
                    {{ $message }}
                    @enderror
                </div>
    </div>
</form>
<span class="line"></span>
@endsection

            
