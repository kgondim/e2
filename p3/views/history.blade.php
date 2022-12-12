@extends('templates/master')

@section('title')
    Results Summary
@endsection

@section('head')
    <link href='/css/about.css' rel='stylesheet'>
@endsection

@section('content')
    <div class='container'>
        <div class='col-md-6'>
            <h2>Round Results History</h2>
        </div>
    </div>
    @if ($allResults)
        <div class='container'>
            <div class='col-md-6'>
                @foreach ($allResults as $result)
                    <p>Round played at {{ $result['timestamp'] }}:
                        you earned {{ $result['win'] }} points! <a class='link' href='/details?id={{ $result['id'] }}'>See
                            details</a>
                    </p>
                @endforeach
            </div>
        </div>
    @endif
    <div class='container'>
        <p><a class='link' href='/game'>Return</a> to the game</p>
    </div>
@endsection
