@extends('layouts/app')

@section('title', 'About-us | '. config('app.name'))

@section('content')
  <img src="{{ asset('images/olympics.jpg') }}" alt="logo olympics">
  <p>Built with <span class="text-pink-500"> &hearts;</span> by Chrichi</p>

  <p>
    <a href="{{ route('home') }}">Retourner à la page d'accueuil</a>
  </p>
@endsection
