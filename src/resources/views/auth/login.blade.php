@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/auth/login.css') }}">
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
<div class="login-form">
    <h2 class="login-form__heading">ログイン</h2>
    <form class="login-form__form" action="/login" method="post" novalidate>
    @csrf
        <div class="login-form__group">
            <label class="login-form__label" for="name">メールアドレス</label>
            <input class="login-form__input" type="mail" name="email" id="email">
                <div class="form__error">
                    @error('email')
                    {{ $message }}
                    @enderror
                </div>
        </div>
        <div class="login-form__group">
            <label class="login-form__label" for="name">パスワード</label>
            <input class="login-form__input" type="password" name="password" id="password">
                <div class="form__error">
                    @error('password')
                    {{ $message }}
                    @enderror
                </div>
        </div>
        <input class="login-form__btn" type="submit" value="ログインする">
    </form>
        <a class="footer__link" href="/register">会員登録はこちら</a>
</div>
@endsection