<?php

session_start();
// https://stackoverflow.com/questions/47515356/php-only-click-counter-counting-when-refresh-page
$clickGuess = 0;

if(!isset($_SESSION['clickGuess'])) {
    $_SESSION['clickGuess'] = $clickGuess;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['SubmitGuess'])) {
        $_SESSION['clickGuess']++;
    }
}
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
    $wins = $my_wins['points'];
    
}


require 'index-view.php';