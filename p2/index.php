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
    // $winner = $_SESSION['results']['winner'];
    // $winner = $_SESSION['results']['flip'];
    // $winner = $_SESSION['results']['choice'];
}
require 'index-view.php';