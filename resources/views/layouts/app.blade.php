<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> <!--selectionne la langue qui est enregistré dans la variable env dans app.php !-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--Cette écriture en dessous veut dire si $title existe on l'affiche sinon on affiche config('app.name') ça supprime une ligne dans home.blade.php !-->
          <!--'{'{ $title ?? config('app.name')}} !-->
        <!--Sinon on fait un ternaire !-->
        <!-- signifie si $title alors on écrit $title | nom de l'application  : on affiche nom de l'application  link: https://www.youtube.com/watch?v=86A2l9f7-Ng!-->
        <title>
          {{ isset($title) ? $title . ' | ' . config('app.name') : config('app.name')}}

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
        @include('layouts/partials/_footer')

    </body>
</html>
