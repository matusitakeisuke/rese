<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rese</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/detail.css') }}">
    @yield('css')
</head>
<body>
    <header class="header">
        <a href="">
            <div class="header__div">
                <div class="div__one"></div>
                <div class="div__two"></div>
                <div class="div__three"></div>
            </div>
        </a>
        <h1 class="header__h1">
            Rese
            <h2 class="h2">
                予約
                <div class="div">
                    <form class="form" action="">
                        <div class="div__form">
                            <input class="input" type="date" name="" id="">
                        </div>
                        <div class="div__select">
                            <select class="select" name="" id="">
                                <option class="option" value="">17:00</option>
                            </select>
                        </div>
                        <div class="div__select">
                            <select class="select" name="" id="">
                                <option class="option" value="">1人</option>
                            </select>
                        </div>
                    </form>
                    <div class="div__color">
                        <div class="div__flex">
                            <p class="p__font-size">shop</p>
                            <p class="p__font-size">仙人</p>
                        </div>
                        <div class="div__flex">
                            <p class="p__font-size">Date</p>
                            <p class="p__font-size">2021-04-01</p>
                        </div>
                        <div class="div__flex">
                            <p class="p__font-size">Time</p>
                            <p class="p__font-size">17:00</p>
                        </div>
                        <div class="div__flex">
                            <p class="p__font-size">Number</p>
                            <p class="p__font-size">1人</p>
                        </div>
                    </div>
                    <div class="div__button">
                        <button class="button">
                            予約する
                        </button>
                    </div>
                </div>
            </h2>
        </h1>
    </header>

    <div class="section">
        <div class="section__flex">
            <div class="div__background-color">
                <a class="div__a" href=""><</a>
            </div>
            <span class="div__h2">仙人</span>
        </div>
        <div class="div__img">
            <img class="img__border" src="{{ asset('jpg/sushi.jpg')}}" alt="寿司" width="100" height="100">
        </div>
        <table class="table">
            <tr class="tr">
                <td class="td">#東京都</td>
                <td class="td">#寿司</td>
            </tr>
        </table>
        <div class="div__text">
            <p class="text">料理長厳選の食材から作る寿司を用いたコースをぜひお楽しみください。食</br>材・味・価格、お客様の満足度を徹底的に追及したお店です。特別な日のお食</br>事、ビジネス接待まで気軽に使用することができます。</p>
        </div>
    </div>
