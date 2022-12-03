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

    @if ($guessSaved)
        <div class='alert alert-success'>Thank you, your guess was entered! The roll was {{ $playerTotal }}. You guessed
            {{ $guess }}</div>
    @endif

    @if ($app->errorsExist())
        <div class='alert alert-danger'>Please correct the errors below</div>
    @endif

    <form method='POST' id='new-guess-form' action='/save'>
        <h3>Guess</h3>

        <div class='form-group'>
            <label for='guess'>Guess (number 2-12)</label>
            <input type='number' class='form-control' name='guess' id='guess' min='2' max='12' required
                maxlength='2' size='10' value='{{ $app->old('guess') }}'>
        </div>


        <button type='submit' class='btn btn-primary'>Submit guess</button>
    </form>


    @if ($winner)
        <div>You won!</div>
    @else
        <div>You lost, please try again!</div>
    @endif


    @if ($app->errorsExist())
        <ul class='error alert alert-danger'>
            @foreach ($app->errors() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection
