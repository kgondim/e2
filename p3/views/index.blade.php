@extends('templates/master')


@section('content')
    <div class='container'>
        <div class='col-md-10'>
            <p>Welcome to the {{ $app->config('app.name') }} game landing!</p>

            <h2>Instructions</h2>
            <p>Input your guess for the dice roll and press the button to submit your guess</p>
            <p>Your guess is then compared to the roll</p>
            <p>If you win, you get 1 point!</p>

        </div>
    </div>
    <div class='container'>
        <p><a class='link' href='game'>Click here</a> if you're ready to play the game!</p>
    </div>
@endsection
