@extends('templates/master')

@section('title')
    Results Summary
@endsection

@section('head')
    <link href='/css/about.css' rel='stylesheet'>
@endsection

@section('content')
    <h2>Round Results History</h2>

    @if ($allResults)
        <div>
            @foreach ($allResults as $result)
                <p>Round timestamp: {{ $result['timestamp'] }} id#: {{ $result['id'] }},
                    you earned {{ $result['win'] }} points!
                </p>
                <p><a href='/details?id={{ $result['id'] }}'>See details of round recorded on {{ $result['timestamp'] }}</a>
                </p>
            @endforeach

        </div>
    @endif

    <a href='/game'>Return to the game</a>
@endsection
