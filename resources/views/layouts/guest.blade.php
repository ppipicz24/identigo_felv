<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <div class="container mx-auto">
            <div class="grid grid-cols-4 gap-6">
                <div class="col-span-4">
                    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
                        @auth
                        <nav class="px-8 pt-2 shadow-md">
                            <div class="collapse navbar-collapse" id="navbarResponsive">
                                <ul class="navbar-nav">

                                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ route('companies.index')}}">Cégek</a></li>
                            <li class="nav-item"><form action="{{ route('logout') }}" method="POST">
                                @csrf
                                        <button type="submit" class="btn btn-outline-light">Kijelentkezés</button></li>
                                    </form>
                                </ul>
                                </div>
                            </nav>
                            @endauth
                            @guest
                            <nav class="px-8 pt-2 shadow-md">
                            <div class="collapse navbar-collapse" id="navbarResponsive">
                            <ul class="navbar-nav">
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ route('companies.index')}}">Cégek</a></li>
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ route('login') }}">Bejelentkezés</a></li>
                                <li class="nav-item"><a class="nav-link js-scroll-trigger"href="{{ route('register') }}">Regisztráció</a></li>
                            </ul>
                            </div>
                        </nav>
                        @endguest
                    </div>
                </nav>
                
                    <div class="col-span-4">
                        {{ $slot }}
                </div>
                                
                </div>
            </div>
        </div>
    </body>
</html>