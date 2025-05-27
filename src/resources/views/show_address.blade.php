@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/show_address.css') }}">
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
<div class="profile-form">
    <h2 class="profile-form__heading">住所の変更</h2>
    <form class="profile-form__form"  action="/purchase/address/:item_id" method="post">
    @csrf  
        <div class="profile-form__group">
            <label class="profile-form__label" for="">郵便番号</label>
            <input class="profile-form__input" type="text" name="post_code" id="post_code">
                <div class="form__error">
                    @error('post_code')
                    {{ $message }}
                    @enderror
                </div>
        </div>
        <div class="profile-form__group">
            <label class="profile-form__label" for="">住所</label>
            <input class="profile-form__input" type="text" name="address" id="address">
                <div class="form__error">
                    @error('address')
                    {{ $message }}
                    @enderror
                </div>
        </div>
        <div class="profile-form__group">
            <label class="profile-form__label" for="">建物名</label>
            <input class="profile-form__input" type="text" name="building" id="building">
        </div>
    </form>
        <input class="profile-form__btn" type="submit" value="更新する">
</div>
@endsection