@extends('app')

@section('title', 'About-us | '. config('app.name')) 
 
@section('content')

        <p>Built with &hearts; by Chrichi</p>
         
         <p><a href="{{ route('home') }}">Retourner à la page d'accueuil</a> 
@endsection
