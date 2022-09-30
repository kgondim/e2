<?php

$dice1 = [1, 2, 3, 4, 5, 6];
$dice2 = [1, 2, 3, 4, 5, 6];

#check documentation for arguments if keys or values
$diceRoll1 = rand(0,5);
$diceRoll2 = rand(0,5);

$roll1 = $dice1[$diceRoll1];
$roll2 = $dice2[$diceRoll2];
 
$player1Total = $roll1 + $roll2;

$diceRoll3 = rand(0,5);
$diceRoll4 = rand(0,5);

$roll3 = $dice1[$diceRoll3];
$roll4 = $dice2[$diceRoll4];

$player2Total = $roll3 + $roll4;

if ($player1Total > $player2Total) {
    $message1 = 'Player 1';
} elseif ($player2Total > $player1Total){
    $message1 = 'Player 2';
} else {
    $message1 = 'No one. Players are tied';
}

require 'index-view.php';