@extends('templates/master')

@section('title')
    Play the game
@endsection

@section('head')
    <link href='/css/about.css' rel='stylesheet'>
@endsection

@section('content')
    <div class='container'>
        <div class='col-md-6'>
            <h2> Play</h2>
        </div>
    </div>

    <div class='container'>
        <div class='col-md-6'>
            {{-- Form to play game --}}
            <form method='POST' id='new-guess-form' action='/process'>
                <h3>Guess the sum of the dice roll</h3>

                <div class='form-group'>
                    <label for='guess'>Pick a number between 2 - 12</label>
                    <input type='number' class='form-control' placeholder="Pick a number" name='guess' id='guess'
                        min='2' max='12' required maxlength='2' size='10'
                        value='{{ $app->old('guess') }}'>
                </div>

                <button type='submit' class='btn btn-default btn-lg active'>Guess!</button>
            </form>
        </div>
    </div>
    {{-- Output for roll compared to guess and result --}}
    @if ($guessSaved)
        <div class='container'>
            <div class='col-md-6'>
                <div class='results'>
                    <p>Thank you, your guess was entered!</p>
                    <p>The roll was {{ $playerTotal }}.</p>
                    <p>You guessed {{ $guess }}.</p>

                    @if ($winner)
                        <span class='won'>You won!</span>
                    @else
                        <span class='lost'>You lost, please try again!</span>
                    @endif
                </div>
            </div>
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
    <div class='container'>
        <a class='link' href='/history'>View the round history</a>
    </div>
@endsection
