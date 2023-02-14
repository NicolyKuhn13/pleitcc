<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/archive.css">
        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+3" rel="stylesheet">

        <!--- Script -->

        <link src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.umd.min.js">
        
    </head>
    <body>
        <header>
            <div class="logo">
                <a href="/"><img src="../images/pleibranco.png" width="70" height="70"></a>
            </div>
            <div class="topnav">
                <a href="login">Login</a>
                <a>|</a>
                <a href="#contact">Cadastrar</a>
            </div>
        </header>
        @yield('content')
        <div class="one">
            <div>
                <label>Corpo do Texto</label>
                <br>
                <textarea id="w3review" name="w3review" rows="4" cols="50"></textarea>
            </div>
        </div>
        <footer>
            <p>PLEI &copy; 2023</p>     
        </footer>
    </body>
</html>