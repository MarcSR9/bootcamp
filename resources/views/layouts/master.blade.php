<!-- resources/views/layouts/master.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kazoku Karate</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <img src="{{ asset('images/logo.png') }}" alt="Logo de Kazoku Karate">
                <span>Kazoku Karate</span>
            </div>
            <nav>
                <ul>
                    <li><a href="{{ route('home') }}">Portal</a></li>
                    <li><a href="{{ route('historia') }}">Historia</a></li>
                    <li><a href="{{ route('dojo-kun') }}">Dojo Kun</a></li>
                    <li class="dropdown">
                        <a href="#">Técnica</a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('kihon') }}">Kihon</a></li>
                            <li><a href="{{ route('kata') }}">Kata</a></li>
                            <li><a href="{{ route('kumite') }}">Kumite</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('foro') }}">Foro</a></li>
                    <li><a href="{{ route('noticias') }}">Noticias</a></li>
                </ul>
            </nav>
            <div class="auth">
                @guest
                    <a href="{{ route('login') }}">Login</a>
                @else
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @endguest
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2024 Kazoku Karate. Todos los derechos reservados.</p>
        </div>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
