@extends('templates/master')

@section('title')
    {{ $app->config('app.name') }}
@endsection

@section('content')
    <h2>Welcome</h2>

    <p>{{ $app->config('app.name') }} is the project 3 game</p>

    <p>
        <a href='game'>Check out the game ...</a>
    </p>
@endsection
