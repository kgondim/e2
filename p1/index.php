<?php

# Create array each di
$dice1 = [1, 2, 3, 4, 5, 6];
$dice2 = [1, 2, 3, 4, 5, 6];

# choose a random element from each di and put in variable __
$diceRoll1 = rand(0,5);
$diceRoll2 = rand(0,5);

$roll1 = $dice1[$diceRoll1];
$roll2 = $dice2[$diceRoll2];

# Total each di and allocate to Player 1
$player1Total = $roll1 + $roll2;

# shorter way to express?
// $diceRoll1 = $dice1[rand(0,5)];
// $diceRoll2 = $dice2[rand(0,5)];
// $player1Total = $diceRoll1 + $diceRoll2;
 


$diceRoll3 = rand(0,5);
$diceRoll4 = rand(0,5);

$roll3 = $dice1[$diceRoll3];
$roll4 = $dice2[$diceRoll4];

$player2Total = $roll3 + $roll4;

# compare Player 1 total to Player 2 total. 
# If Player1 score is greater, Player 1 is winner. 
# If Player2 score is greater, Player 2 is winner.
# If tied, No one wins. 
# Message reporting results in view

if ($player1Total > $player2Total) {
    $message1 = 'Player 1';
    # $winner = 'Player 1';
} elseif ($player2Total > $player1Total){
    $message1 = 'Player 2';
} else {
    $message1 = 'No one. Players are tied';
}

require 'index-view.php';