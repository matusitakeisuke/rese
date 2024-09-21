@extends('layout.rese')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('rese')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="section">
    <div class="section__div">
        <p class="section__p">Registration
            <form class="section__form" action="{{ route('register')}}" method="POST">
            @csrf
                <table class="table">
                    <tr>
                        <th><img class="img" src="{{ asset('img/user.png')}}" alt="ユーザー" width="35" height="30"></th>
                        <th><input class="table__input" type="text" name="name" value="{{ old('name')}}" placeholder="Usermane"></th>
                    </tr>
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
                    <button type="submit" class="button">登録</button>
                </div>
            </form>
        </p>
    </div>
</div>
@endsection