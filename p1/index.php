<?php

# Create array for each di
$dice1 = [1, 2, 3, 4, 5, 6];
$dice2 = [1, 2, 3, 4, 5, 6];

for ($i = 0; $i < 5; $i++) {
    var_dump($i);
    # choose a random element from each di and put in variable
    $diceRoll1 = $dice1[rand(0, 5)];
    $diceRoll2 = $dice2[rand(0, 5)];
    # Total each di and allocate to Player 1
    $player1Total = $diceRoll1 + $diceRoll2;
    # Repeat for Player 2
    $diceRoll3 = $dice1[rand(0, 5)];
    $diceRoll4 = $dice2[rand(0, 5)];
    $player2Total = $diceRoll3 + $diceRoll4;
    
    # Determine winner
    # Reporting results in view
    if ($player1Total > $player2Total) {
        $message1 = 'Player 1';
    # $winner = 'Player 1';
    } elseif ($player2Total > $player1Total) {
        $message1 = 'Player 2';
    } else {
        $message1 = 'No one. Players are tied';
    }
    
    $results[] = [
        'diceRoll1' => $diceRoll1,
        'diceRoll2' => $diceRoll2,
        'diceRoll3' => $diceRoll3,
        'diceRoll4' => $diceRoll4,
        'player1' => $player1Total,
        'player2' => $player2Total
    ];
}
var_dump($results);

# for loop to repeat whole game multiple (set number) rounds -- this is what we want
# foreach good for iterating through arrays
# while loop is good for looping to indeterminate end
require 'index-view.php';