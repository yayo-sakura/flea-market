@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/show_profile.css') }}">
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
    <h2 class="profile-form__heading">プロフィール設定</h2>
    <form class="profile-form__form" action="/mypage/profile" method="post" enctype="multipart/form-data">
    <!-- @method('POST') -->
    @csrf
        <div class="profile-form__img">
            <label class="label">画像を選択する
                <input type="file" id="image" class="image" name="profile_image" accept="image/png, image/jpeg" value="{{ old('profile_image') }}">
            </label>
                <div class="form__error">
                    @error('image')
                    {{ $message }}
                    @enderror
                </div>
        </div>
        <div class="profile-form__group">
            <label class="profile-form__label" for="name">ユーザー名</label>
            <input class="profile-form__input" type="text" name="name" id='name' value="{{ old('name') }}">
        </div>
        <div class="profile-form__group">
            <label class="profile-form__label" for="post_code">郵便番号</label>
            <input class="profile-form__input" type="text" name="post_code" id='post_code' value="{{ old('post_code') }}">
        </div>
        <div class="profile-form__group">
            <label class="profile-form__label" for="address">住所</label>
            <input class="profile-form__input" type="text" name="address" id='address' value="{{ old('address') }}">
        </div>
        <div class="profile-form__group">
            <label class="profile-form__label" for="building">建物名</label>
            <input class="profile-form__input" type="text" name="building" id='building' value="{{ old('building') }}">
        </div>
        <div class="update-form__button">
            <button class="update-form__button-submit" type="submit">更新する</button>
        </div>
    </form>
</div>
@endsection
