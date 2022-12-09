@extends('templates/master')


@section('content')
    <p>Welcom to the {{ $app->config('app.name') }} game landing!</p>

    <h2>Instructions</h2>
    <p>Input your guess for the dice roll and submit</p>
    <p>Your guess is compared to the roll</p>
    <p>If you win, you get 1 point!</p>



    <p>
        <a href='game'>Click here if you're ready to play out the game!</a>
    </p>
@endsection
