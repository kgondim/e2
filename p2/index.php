<?php

session_start();

if(isset($_SESSION['results'])) {

    $results = $_SESSION['results'];
    $diceRoll1 = $results['diceRoll1'];
    $diceRoll2 = $results['diceRoll2'];
    $playerTotal = $results['player'];
    $winner = $results['winner'];
    $guess = $results['guess'];
   
   
    $_SESSION['results'] = null;
   
}

if (isset($_SESSION['my_wins'])) {
    $my_wins = $_SESSION['my_wins'];
    $num = $my_wins['points'];
}


require 'index-view.php';