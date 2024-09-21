@extends('layout.rese')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('rese')

@if ($errors->any())
<div class="login_error">
    <ul>
@foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
@endforeach
    </ul>
</div>
@endif

<div class="section">
    <div class="section__div">
        <p class="section__p">Login
            <form class="section__form" action="/login" method="post">
                @csrf
                <table class="table">
                    <tr class="table__tr">
                        <th><img class="img" src="{{ asset('img/email.png')}}" alt="メール" width="35" height="30"></th>
                        <th><input class="table__input" type="email" name="email" value="{{ old('email')}}" placeholder="Email"></th>
                    </tr>
                    <tr>
                        <th><img class="img" src="{{ asset('img/password.png')}}" alt="パスワード" width="35" height="30"></th>
                        <th><input class="table__input" type="password" name="password" placeholder="Password"></th>
                    </tr>
                </table>
                <div class="section__button">
                    <button class="button">ログイン</button>
                </div>
            </form>
        </p>
    </div>
</div>
@endsection