@extends('layout.rese')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/done.css')}}">
@endsection

@section('rese')
<div class="section__div">
    <p class="p">
        ご予約ありがとうございます。
        <form class="form" action="">
            <div class="form__div">
                <button class="button">
                    戻る
                </button>
            </div>
        </form>
    </p>
</div>
@endsection