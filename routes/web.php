<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function(){
    return view('pages/home'); //on peut aussi utiliser un . ça fonctionne comme le / pour accéder au sous-dossier
});

Route::get('/about-us', function(){
    return view('pages/about');
});

/*Route::get('home', function(){
    return view('home'); //route qui affiche le id mdp
});*/

Route::get('cache', function(){
    return Cache::get('key');
});

Route::get('ref', function(){
    return View('ref');
});
