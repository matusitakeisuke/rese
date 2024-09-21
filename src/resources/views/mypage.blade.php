@extends('layout.rese')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/mypage.css')}}">
@endsection

@section('rese')

<div>
    <table class="table">
        <tr class="tr">
            <th class="th"><input class="input" type="text"></th>
            <th class="th">さん</th>
        </tr>
    </table>
</div>
<div class="section__div">
    <div class="div__flex">
        <p class="div__left">予約状況</p>
        <p class="div__right">お気に入り店舗</p>
    </div>
</div>
<div class="section__flex">
  <div class="section__main">
    <div class="div__display">
        <p class="p__img"><img  src="{{ asset('img/clock.png')}}" alt="メール" width="35" height="30"></p>
        <p class="p__reservation">予約１</p>
        <p class="p__a"><a class="a__border" href="">×</a></p>
    </div>
    <div class="div__display">
        <p class="p__category">Shop</p>
        <p class="p__category-padding">仙人</p>
    </div>
    <div class="div__display">
        <p class="p__category">Date</p>
        <p class="p__category-padding">2021-04-01</p>
    </div>
    <div class="div__display">
        <p class="p__category">Time</p>
        <p class="p__category-padding">17:00</p>
    </div>
    <div class="div__display">
        <p class="p__category">Number</p>
        <p class="p__category-padding">1人</p>
    </div>
  </div>
  <div class="div__main">
    <img class="img__border" src="{{ asset('jpg/sushi.jpg')}}" alt="寿司">
    <h2 class="h2__div">仙人</h2>
    <table class="table__td">
        <tr>
            <td>＃東京都</td>
            <td>＃寿司</td>
        </tr>
    </table>
    <div class="div__flex-display">
        <div class="div__margin">
            <a class="a__text-decoration" href="">詳しく見る</a>
        </div>
        <p class="p__margin-left"><img src="{{ asset('img/heart.png')}}" alt="ハート" width="35" height="35"></p>
    </div>
  </div>
  <div class="div__main">
    <img class="img__border" src="{{ asset('jpg/yakiniku.jpg')}}" alt="寿司">
    <h2 class="h2__div">牛助</h2>
    <table class="table__td">
        <tr>
            <td>＃大阪府</td>
            <td>＃焼肉</td>
        </tr>
    </table>
    <div class="div__flex-display">
        <div class="div__margin">
            <a class="a__text-decoration" href="">詳しく見る</a>
        </div>
        <p class="p__margin-left"><img src="{{ asset('img/heart.png')}}" alt="ハート" width="35" height="35"></p>
    </div>
  </div>
</div>



@endsection