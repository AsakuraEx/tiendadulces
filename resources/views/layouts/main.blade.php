<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title') </title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

</head>
<body class="font-roboto">
    <header>
        <nav class="container navbar py-2">
            
            <h1 class="text-3xl font-bold">Tienda Sarita</h1>

            <input type="checkbox" id="menu" class="hidden peer/menu">
            <label for="menu" class="hamburger-menu md:hidden"></label>

            <div class="navbar-list">
                <a class="navbar-item" href="{{ route('dashboard') }}">Inicio</a>
                <a class="navbar-item" href="#">Dulces</a>

                @if (Auth::guest())
                    <a class="navbar-item" href="{{ route('login') }}">Iniciar Sesion</a>
                    <a class="navbar-item" href="{{ route('register') }}">Registrate</a>
                @endif

                @if (!Auth::guest())

                    @if (Auth::user()->rol == "admin")

                        <a class="navbar-item" href="{{ route('misitio') }}">Mi Sitio</a>
                    
                    @endif

                    @if (Auth::user()->rol == "admin" || Auth::user()->rol == "regular")
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-responsive-nav-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Cerrar Sesion') }}
                            </x-responsive-nav-link>
                        </form>                          
                    @endif

                @endif 


              
            </div>
        </nav>
        @if (!Auth::guest())
            <section class="bg-white border-b py-4 px-16 drop-shadow-md">
                <p class="text-black text-center md:text-start">Bienvenido/a: <b>{{ Auth::user()->name }}</b></p>
            </section>            
        @endif

    </header>

    <main>
        <div class="main">
            @yield('main')
        </div>

    </main>

    <footer class="bg-emerald-600 text-center font-bold py-8 text-white text-xl">
        Tienda Sarita - 2024 &copy;
    </footer>
    
</body>
</html>