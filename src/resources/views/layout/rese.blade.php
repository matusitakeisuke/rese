<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rese</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
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
    </header>


    <div>
        @yield('rese')
    </div>
</body>
</html>