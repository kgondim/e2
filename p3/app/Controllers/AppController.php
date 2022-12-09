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
        # upon redirect from process method, session data retrieved and passed to view
        $guessSaved = $this->app->old('guessSaved');
        $winner = $this->app->old('winner');
        $playerTotal = $this->app->old('playerTotal');
        $guess = $this->app->old('guess');
        
        return $this->app->view('game', [
            'about' => 'Play the game',
            'guessSaved' => $guessSaved,
            'winner' => $winner,
            'playerTotal' => $playerTotal,
            'guess' => $guess,
        ]);
    }

    public function process()
    {
        $this->app->validate([
            'guess' => 'required'
        ]);

        # retrieve guess from user input in form
        $guess = $this->app->input('guess');
        
        # game logic
        # Create array di
        $dice = [1, 2, 3, 4, 5, 6];
        # sum a random element from each of two dice rolls and assign to Player
        $playerTotal =  $dice[rand(0, 5)] + $dice[rand(0, 5)];

        # determine if winner with boolean: 1 is winner, 0 is not winner
        $winner = $guess == $playerTotal ? 1 : 0;

        # persist input win/loss result in database
        $this->app->db()->insert('results', [
                'win' => $winner,
                'timestamp' => date('Y-m-d H:i:s')
        ]);


        $this->app->redirect('/game', [
            'guessSaved' => true,
            'winner' => $winner,
            'playerTotal' => $playerTotal,
            'guess' => $guess,
        ]);
    }
    

    public function history()
    {
        $allResults = $this->app->db()->all('results');
        
        return $this->app->view('history', [
            'allResults' => $allResults,
        ]);
    }

    public function details()
    {
        $id = $this->app->param('id');
        $details = $this->app->db()->findById('results', $id);
        
        return $this->app->view('details', [
            'details' => $details,
        ]);
    }

}