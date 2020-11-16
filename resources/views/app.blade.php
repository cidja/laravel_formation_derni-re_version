<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> <!--selectionne la langue qui est enregistré dans la variable env dans app.php !-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>
            @yield('title', config('app.name'))
        </title>


    </head>
    <body>
        @yield('content')
        <!--Pour accéder à une variable de configuration qui se trouve dans app !-->
        {{ config('app.name')}}
        <!--Pour vérifier ce que retourne la fonction on utilise dump !-->
        {{ dump(config('database.connections.sqlite.dirver'))}}

        <footer>
           <p>
           &copy; Copyright {{date('Y')}}
            @if(! Route::is('about')) <!--affiche le lien about uniquement si on est sur une page différente de about !-->

            &middot; <a href="{{ route('about') }}">About Us</a></p>

            @endif
        </footer>
    </body>
</html>
