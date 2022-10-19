<?php

# array for each di
$dice1 = [1, 2, 3, 4, 5, 6];
$dice2 = [1, 2, 3, 4, 5, 6];

for ($i = 0; $i < 5; $i++) {
    
    # choose a random element from each di 
    $diceRoll1 = $dice1[rand(0, 5)];
    $diceRoll2 = $dice2[rand(0, 5)];
    # Total "roll" and allocate to Player 1
    $player1Total = $diceRoll1 + $diceRoll2;
    # Repeat for Player 2
    $diceRoll3 = $dice1[rand(0, 5)];
    $diceRoll4 = $dice2[rand(0, 5)];
    $player2Total = $diceRoll3 + $diceRoll4;

    # Determine winner
    # Reporting results in view
    $message1 = ($player1Total > $player2Total) ? 'Player 1' : (($player2Total > $player1Total) ? 'Player 2' : 'neither player. Players are tied');
    
    $results[] = [
        'diceRoll1' => $diceRoll1,
        'diceRoll2' => $diceRoll2,
        'diceRoll3' => $diceRoll3,
        'diceRoll4' => $diceRoll4,
        'player1' => $player1Total,
        'player2' => $player2Total,
        'winner' => $message1
    ];
    
}

require 'index-view.php';