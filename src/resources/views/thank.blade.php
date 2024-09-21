@extends('layout.rese')

@section('css')
<link rel="stylesheet" href="{{ asset('css/thank.css') }}">
@endsection

@section('rese')
    <div class="section__div">
        <p class="p">
            会員登録ありがとうございます。
            <form class="form" action="">
                <div class="form__div">
                    <button class="button">
                        ログインする
                    </button>
                </div>
            </form>
        </p>
    </div>
@endsection