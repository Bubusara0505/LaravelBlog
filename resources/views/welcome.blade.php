<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        <title>Laravel</title>
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body class="antialiased">
        <div class="wrapper">
            <header class="header ">
                <a href="#">Logo</a>
                <div class="menu">
                    <a href="#">Blog</a>
                    <a href="#">Menu</a>
                    <a href="#">Settigs</a>
                </div>
            </header>
        </div>
    </body>
</html>
