@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/details.css') }}">
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
<div class="details-content">
    <div class="product-image">
        <img src=""  alt="商品画像" class="img-content"/>
    </div>
    <div class="details-content__right">
        <div class="product-details">
            <h2 class="product-name">商品名がここに入る</h2>
            <p class="product-brand">ブランド名</p>
            <p class="product-price">￥47,000(税込)</p>
            <div class="mark-count">
                <img src="star-icon" alt="星アイコン" class="img-icon"></img>
                <img src="comment-icon" alt="ふきだしアイコン" class="img-icon"></img>
            </div>
        </div>
        <div class="link">
            <a class="purchase__link" href="/purchase/:item_id">購入手続きへ</a>
        </div>
        <div class="product-description">
            <h3 class="product-description__title">商品説明</h3>
            <p class="product-color">カラー：グレー</p>
            <P class="product-condition">
                新品<br />
                商品の状態は良好です。傷もありません。
            </p>
            <p class="product-comment">購入後、即発送いたします。</p>
        </div>
        <div class="product-information">
            <div class="product-information__title">
                <h3 class="product-information__title--h3">商品の情報</h3>
            </div>
                <div class="product-information__category">
                    <div class="product-information__category--inner">
                        <h4 class="product-information__category--name">カテゴリー</h4>
                        <p class="product-information__category--content">洋服</p>
                        <p class="product-information__category--content">メンズ</p>
                    </div>
                </div>
                <div class="product-information__condition">
                    <div class="product-information__condition--inner">
                        <h4 class="product-information__condition--name">商品の状態</h4>
                        <p class="product-information__condition--content">良好</p>
                    </div>
                </div>
        </div>
                <div class="product-information__comment">
                    <h3 class="product-information__comment--title">コメント(1)</h3>
                    <div class="product-information__user">
                        <div class="product-information__user--img">
                            <img src=""alt="" class="user-img" />
                            <span class="user-name">admin</span>
                        </div>
                        <div class="product-information__user--comment">
                            <P class="user-comment">こちらにコメントが入ります。</P>
                        </div>
                    </div>
                    <form class="form" action="/item/:item_id" method="get">
                        <div class="comment-form__group">
                            <label class="comment-form__label" for="name">商品へのコメント</label>
                            <textarea class="comment-form__textarea" name="comment" cols="120" rows="5"></textarea>
                                <div class="form__error">
                                    @error('comment')
                                    {{ $message }}
                                    @enderror
                                </div>
                            <input class="comment-form__btn" type="submit" value="コメントを送信する">
                        </div>
                    </form>
                </div>
    </div>
</div>
@endsection

