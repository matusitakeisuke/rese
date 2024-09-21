<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rese</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/shop.css') }}">
    @yield('css')
</head>
<body>
    <header class="header">
        <a href="/menu">
            <div class="header__div">
                <div class="div__one"></div>
                <div class="div__two"></div>
                <div class="div__three"></div>
            </div>
        </a>
        <h1 class="header__h1">
            Rese
        </h1>
        <div class="header__div-1">
            <form class="header__form" action="">
                <div class="div__select">
                  <select class="form__select" name="" id="">
                    <option class="option" value="All area">All area</option>
                  </select>
                </div>
                <div class="div__select">
                  <select class="form__select" name="" id="">
                    <option class="option" value="All genre">All genre</option>
                  </select>
                </div>
                <img class="img" src="{{ asset('img/search.png')}}" alt="検査" width="30" height="30">
                <input class="form__input" type="search" placeholder="Search ...">
            </form>
        </div>
    </header>

  <div class="div__flex">
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
            <p class="p__margin-left"><img  src="{{ asset('img/heart.png')}}" alt="ハート" width="35" height="35"></p>
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
            <p class="p__margin-left"><img  src="{{ asset('img/heart.png')}}" alt="ハート" width="35" height="35"></p>
        </div>
      </div>
    </div>
    <div class="div__flex">
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
                <p class="p__margin-left"><img  src="{{ asset('img/heart.png')}}" alt="ハート" width="35" height="35"></p>
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
                <p class="p__margin-left"><img  src="{{ asset('img/heart.png')}}" alt="ハート" width="35" height="35"></p>
            </div>
          </div>
        </div>
        <div class="div__flex">
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
                    <p class="p__margin-left"><img  src="{{ asset('img/heart.png')}}" alt="ハート" width="35" height="35"></p>
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
                    <p class="p__margin-left"><img  src="{{ asset('img/heart.png')}}" alt="ハート" width="35" height="35"></p>
                </div>
              </div>
            </div>