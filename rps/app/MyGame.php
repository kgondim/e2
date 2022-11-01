<?php

namespace App;

use RPS\Game;

class MyGame extends Game
{
    
    protected $moves = ['heads', 'tails'];

    
    protected function determineOutcome($playerMove, $computerMove)
    {
        return $computerMove == $playerMove; 
    // if ($playerMove == 'heads' and $computerMove == 'heads' or $playerMove == 'tails' and $computerMove == 'tails') {
    //         return 'won';
    //     } else {
    //         return 'lost';
    //     }
    }

}