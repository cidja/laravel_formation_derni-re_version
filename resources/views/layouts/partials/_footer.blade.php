<footer>
   <p class="text-gray-400">
     <a href="{{route('help')}}">Help</a>
   &copy; Copyright {{date('Y')}}
    @if(! Route::is('about')) <!--affiche le lien about uniquement si on est sur une page différente de about !-->

    &middot; <a href="{{ route('about') }}" class="text-indigo-500 hover:text-indigo-600 underline" >About Us</a></p>
    @endif
</footer>
