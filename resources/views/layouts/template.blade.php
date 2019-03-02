<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>{{ $title }}</title>
    </head>
    <body>
        <header class="navbar">
            <div class="navbar__logo">
                    <i class="fab fa-youtube"></i> Movie
            </div>
            <nav>
                <ul class="nav">
                    <li class="nav-item">Menu 1</li>
                    <li class="nav-item">Menu 2</li>
                </ul>
            </nav>
        </header>
        <main class="container">
            @yield('content')
        </main>
    </body>
</html>