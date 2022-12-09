@extends('templates/master')

@section('title')
    About the game
@endsection

@section('head')
    <link href='/css/about.css' rel='stylesheet'>
@endsection

@section('content')
    <h2>About</h2>

    {{ $about }}
    {{-- Form to play game --}}
    <form method='POST' id='new-guess-form' action='/process'>
        <h3>Guess</h3>

        <div class='form-group'>
            <label for='guess'>Guess a dice roll between 2-12</label>
            <input type='number' class='form-control' name='guess' id='guess' min='2' max='12' required
                maxlength='2' size='10' value='{{ $app->old('guess') }}'>
        </div>

        <button type='submit' class='btn btn-primary'>Guess!</button>
    </form>
    {{-- Output for roll compared to guess and result --}}
    @if ($guessSaved)
        <div class='results'>
            <p>Thank you, your guess was entered!</p>
            <p>The roll was {{ $playerTotal }}.</p>
            <p>You guessed {{ $guess }}.</p>
            <p>This is round {{ $round }}.</p>

            @if ($winner)
                <div class='won'>You won!</div>
            @else
                <div class='lost'>You lost, please try again!</div>
            @endif
        </div>
    @endif

    @if ($app->errorsExist())
        <ul class='error alert alert-danger'>
            @foreach ($app->errors() as $error)
                <li>{{ $error }}</li>
                <li>Please correct the errors below</li>
            @endforeach
        </ul>
    @endif
    <a href='/history'>View the round history</a>
@endsection
