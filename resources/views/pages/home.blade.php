@extends('app')

@section('content')
          <h1>Hello from France</h1>

          <p>It's currently {{ date('d-M-Y')}} and time is {{ date(DATE_RSS) }} </p>
@endsection
