<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> <!--selectionne la langue qui est enregistré dans la variable env dans app.php !-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>
            @yield('title', config('app.name'))
        </title>
        <!--Utilisation de tailwindcss avec le cdn !-->
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">


    </head>
    <body>
      <main role="main">
        @yield('content')
      </main>

        <!--Pour accéder à une variable de configuration qui se trouve dans app !-->
        {{ config('app.name')}}
        <!--Pour vérifier ce que retourne la fonction on utilise dump !-->
        {{ dump(config('database.connections.sqlite.dirver'))}}

        <footer>
           <p class="text-gray-400">
           &copy; Copyright {{date('Y')}}
            @if(! Route::is('about')) <!--affiche le lien about uniquement si on est sur une page différente de about !-->

            &middot; <a href="{{ route('about') }}" class="text-indigo-500 hover:text-indigo-600 underline" >About Us</a></p>

            @endif
        </footer>
    </body>
</html>
