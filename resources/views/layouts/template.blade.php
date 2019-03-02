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
                <a href="{{ url('/') }}">
                    <i class="fab fa-youtube"></i> Movie
                </a>
            </div>
            <nav>
                <ul class="nav">
                    <li class="nav-item">
                        <a href="{{ url('movie') }}" class="{{ Request::is('movie') ? 'active' : '' }}">
                            Liste des films
                        </a>
                    </li>
                    <li class="nav-item">Ajouter un film</li>
                </ul>
            </nav>
        </header>
        <main class="container">
            @yield('content')
        </main>
    </body>
</html>