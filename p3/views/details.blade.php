@extends('templates/master')

@section('title')
    Detailed Results
@endsection

@section('head')
    <link href='/css/about.css' rel='stylesheet'>
@endsection

@section('content')
    <div class='container'>
        <div class='col-md-6'>
            <h2>Selected Round Details</h2>
        </div>
    </div>
    @if ($details)
        <div class='container'>
            <div class='col-md-6'>
                <p>Round played at {{ $details['timestamp'] }}</p>
                <p>Result: You {{ $details['win'] ? 'won' : 'lost' }}!</p>
                </p>
                <p><a class='link' href='/game'>Return</a> to the game</p>
                <p><a class='link' href='/history'>Return</a> to the round history</p>
            </div>
        </div>
    @endif
@endsection
