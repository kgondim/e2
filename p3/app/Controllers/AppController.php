<?php
namespace App\Controllers;

class AppController extends Controller
{
    /**
     * This method is triggered by the route "/"
     */
    public function index()
    {
        return $this->app->view('index');
    }

    public function game()
    {
        # user input guess
        $guessSaved = $this->app->old('guessSaved');
        dump($guessSaved);
        # Create array for each di
        $dice1 = [1, 2, 3, 4, 5, 6];
        $dice2 = [1, 2, 3, 4, 5, 6];

        # choose a random element from each di and assign to variable
        $diceRoll1 = $dice1[rand(0, 5)];
        $diceRoll2 = $dice2[rand(0, 5)];
        # Sum from "roll" and allocate to Player
        $playerTotal = $diceRoll1 + $diceRoll2;
        # Determine winner
        $guess = $this->app->sessionGet('guess');
        $winner = $guess == $playerTotal;
        dump($guess);
        return $this->app->view('game', [
            'about' => 'Play the game',
            'guessSaved' => $guessSaved,
            'winner' => $winner,
            'playerTotal' => $playerTotal,
            'guess' => $guess,
        ]);
    }

    public function save()
    {
        $this->app->validate([
            'guess' => 'required'
        ]);

        $guess = $this->app->input('guess');
        $this->app->db()->insert('guesses', [
            'guess' => $guess
        ]);

        $this->app->redirect('/game', [
            'guessSaved' => true,
            'guess' => $this->app->input('guess')
        ]);
    }
}