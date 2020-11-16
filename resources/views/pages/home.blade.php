@extends('app')
@section('title', config('app.name'))

@section('content')
    <img src="{{ asset('images/nrj.png') }}" alt="logo NRJ">
          <h1>Hello from France</h1>

          <p>It's currently {{ date('d-M-Y')}} and time is {{ date(DATE_RSS) }} </p>
@endsection
