<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
    @yield('css')
</head>
<body>
    <header class="header">
        <a class="header__a" href="">
            <div class="header__div">
                <h1>×</h1>
            </div>
        </a>

    </header>

    @auth
    <div class="section">
        <table class="table">
            <form action="">
            @csrf
              <tr class="tr">
                <th class="th"><button class="section__button" href="">Home</button></th>
              </tr>
            </form>
            <form action="{{ route('logout')}}" method="POST">
            @csrf
              <tr class="tr">
                <th class="th"><button class="section__button" href="">Logout</button></th>
              </tr>
            </form>
            <form action="">
            @csrf
              <tr class="tr">
                <th class="th"><button class="section__button" href="">Mypage</button></th>
              </tr>
            </form>
        </table>
    </div>
    @endauth

    @guest
    <div class="section">
      <table class="table">
          <form action="">
          @csrf
            <tr class="tr">
              <th class="th"><a class="section__button" href="/">Home</a></th>
            </tr>
          </form>
          <form action="">
          @csrf
            <tr class="tr">
              <th class="th"><a class="section__button" href="/register">Registration</a></th>
            </tr>
          </form>
          <form action="">
          @csrf
            <tr class="tr">
              <th class="th"><a class="section__button" href="login">Login</a></th>
            </tr>
          </form>
      </table>
  </div>
  @endguest
</body>
</html>