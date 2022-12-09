@extends('templates/master')

@section('title')
    Detailed Results
@endsection

@section('head')
    <link href='/css/about.css' rel='stylesheet'>
@endsection

@section('content')
    <h2>Selected Round Details</h2>

    @if ($details)
        <div>
            <p>id: {{ $details['id'] }}</p>
            <p>Round timestamp: {{ $details['timestamp'] }}</p>
            <p>win: {{ $details['win'] ? 'won' : 'lost' }}</p>
            </p>
            <a href='/game'>Return to the game</a>
            <a href='/history'>Return to the round history</a>
        </div>
    @endif
@endsection
