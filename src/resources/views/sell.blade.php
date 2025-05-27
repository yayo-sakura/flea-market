@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/sell.css') }}">
@endsection

@section('header')
<header class="header">
    <div class="header__inner">
      <div class="header__logo">
        <h1>
            <img src="../../images/logo.svg" alt="COACHTECH">
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
<div class="Product-sell">
    <h2 class="Product-sell__heading">商品の出品</h2>
</div>
<div class="product-img">
    <h3 class="product-img__title">商品画像</h3>
    <div class="product-img__inner">
        <div class="product-img__btn">
            <label class="label">画像を選択する</label>
            <input type="file" id="product_image" class="image" name="product_image">
        </div>
            <div class="form__error">
                @error('product_image')
                {{ $message }}
                @enderror
            </div>
    </div>
</div>

<div class="product-details">
    <div class="product-details__heading">
        <h2 class="product-details__title">商品の詳細</h2>
    </div>
        <div class="product-details__inner">
            <h3 class="product-details__category">カテゴリー</h3>
                <ul>
                    <li class="btn_class"><a href="#">ファッション</a></li>
                    <li class="btn_class"><a href="#">家電</a></li>
                    <li class="btn_class"><a href="#">インテリア</a></li>
                    <li class="btn_class"><a href="#">レディース</a></li>
                    <li class="btn_class"><a href="#">メンズ</a></li>
                    <li class="btn_class"><a href="#">コスメ</a></li>
                    <li class="btn_class"><a href="#">本</a></li>
                    <li class="btn_class"><a href="#">ゲーム</a></li>
                    <li class="btn_class"><a href="#">スポーツ</a></li>
                    <li class="btn_class"><a href="#">キッチン</a></li>
                    <li class="btn_class"><a href="#">ハンドメイド</a></li>
                    <li class="btn_class"><a href="#">アクセサリー</a></li>
                    <li class="btn_class"><a href="#">おもちゃ</a></li>
                    <li class="btn_class"><a href="#">ベビー・キッズ</a></li>
                </ul>
                    <div class="form__error">
                        @error('product_category')
                        {{ $message }}
                        @enderror
                    </div>
        </div>
        <form class="product-form__form" action="/sell" method="get">
        @csrf
            <div class="product-details__group">
                <label class="product-details__condition">商品の状態</label>
                    <select class="product-details__select" name="category_id" id="">
                        <option hidden>選択してください</option>
                        <option value="良好">良好</option>
                        <option value="目立った傷や汚れなし">目立った傷や汚れなし</option>
                        <option value="やや傷や汚れあり">やや傷や汚れあり</option>
                        <option value="状態が悪い">状態が悪い</option>
                    </select>
                        <div class="form__error">
                            @error('product_condition')
                            {{ $message }}
                            @enderror
                        </div>
            </div>
        </form>
</div>
<div class="product-description">
    <div class="product-description__heading">
        <h2 class="Product-description__title">商品名と説明</h2>
    </div>
    <form class="product-form__form" action="/sell" method="get">
    @csrf
        <div class="product-form__group">
            <label class="product-form__label" for="name">商品名</label>
            <input class="product-form__input" type="text" name="name" id="">
                <div class="form__error">
                    @error('product_name')
                    {{ $message }}
                    @enderror
                </div>
        </div>
        <div class="product-form__group">
            <label class="product-form__label" for="name">ブランド名</label>
            <input class="product-form__input" type="text" name="name" id="">
        </div>
        <div class="product-form__group--description">
            <label class="product-form__label" for="name">商品の説明</label>
            <input class="product-form__input--description" type="text" name="text" id="">
                <div class="form__error">
                    @error('product_description')
                    {{ $message }}
                    @enderror
                </div>
        </div>
        <div class="product-form__group">
            <label class="product-form__label" for="name">販売価格</label>
            <div class="Sales-price">
                <span class="heading__￥">￥</span>
                <input class="product-form__input" type="text" name="text" id="">
            </div>
                <div class="form__error">
                    @error('product_price')
                    {{ $message }}
                    @enderror
                </div>
        </div>
    </form>
    <input class="sell-form__btn" type="submit" value="出品する">
</div>
@endsection