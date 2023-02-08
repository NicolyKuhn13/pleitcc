<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/main.css">
        <script src="../js/main.js"></script>
        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+3:wght@600&display=swap" rel="stylesheet">
        <!-- Boots -->


    </head>
    <body>
        <header>
            <div class="logo">
                <a href="/"><img src="../images/pleiofc.png" width="70" height="70"></a>
            </div>
            <div class="topnav">
                <a href="login">Login</a>
                <a>|</a>
                <a href="#contact">Cadastrar</a>
            </div>
        </header>
        @yield('content')
        <footer>
            <p>PLEI &copy; | 2023</p>
        </footer>
    </body>
</html>
