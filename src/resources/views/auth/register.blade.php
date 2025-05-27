@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/auth/register.css') }}">
@endsection

@section('header')
<header class="header">
    <div class="header__inner">
      <div class="header__logo">
        <h1>
            <img src="../images/logo.svg" alt="COACHTECH">
        </h1>
      </div>
    </div>
</header>
@endsection

@section('content')
<div class="register-form">
    <h2 class="register-form__heading">会員登録</h2>
    <form class="register-form__form" action="/register" method="post">
    @csrf
        <div class="register-form__group">
            <label class="register-form__label" for="name">ユーザー名</label>
            <input class="register-form__input" type="text" name="name" id="name" value="{{ old('name') }}">
                <div class="form__error">
                    @error('name')
                    {{ $message }}
                    @enderror
                </div>
        </div>
        <div class="register-form__group">
            <label class="register-form__label" for="name">メールアドレス</label>
            <input class="register-form__input" type="mail" name="email" id="email" value="{{ old('email') }}">
                <div class="form__error">
                    @error('email')
                    {{ $message }}
                    @enderror
                </div>
        </div>
        <div class="register-form__group">
            <label class="register-form__label" for="name">パスワード</label>
            <input class="register-form__input" type="password" name="password" id="password">
                <div class="form__error">
                    @error('password')
                    {{ $message }}
                    @enderror
                </div>
        </div>
        <div class="register-form__group">
            <label class="register-form__label" for="name">確認用パスワード</label>
            <input class="register-form__input" type="password" name="password_confirmation">
                <div class="form__error">
                    @error('password_confirmation')
                    {{ $message }}
                    @enderror
                </div>
        </div>
    
        <button class="register-form__btn" type="submit">登録する</button>
        <a class="footer__link" href="/login">ログインはこちら</a>
    </form>
</div>
@endsection