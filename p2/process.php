<?php

session_start();

# user input guess
$guess = $_POST['guess']; 

# Create array for each di
$dice1 = [1, 2, 3, 4, 5, 6];
$dice2 = [1, 2, 3, 4, 5, 6];
 
   
    # choose a random element from each di and assign to variable
    $diceRoll1 = $dice1[rand(0, 5)];
    $diceRoll2 = $dice2[rand(0, 5)];
    # Sum from "roll" and allocate to Player
    $playerTotal = $diceRoll1 + $diceRoll2;
    # Determine winner 
    $winner = $guess == $playerTotal;
   

$_SESSION['results'] = [
    'diceRoll1' => $diceRoll1,
    'diceRoll2' => $diceRoll2,
    'player' => $playerTotal,
    'winner' => $winner,
    'guess' => $guess
];


header('Location: index.php');