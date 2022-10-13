<?php

session_start();

if(!is_null($_SESSION['results'])) {
    $results = $_SESSION['results'];

    $haveAnswer = $results['haveAnswer'];
    $correct = $results['correct'];

    $_SESSION['results'] = null;
}

$words = [
    'evidence' => 'A discovery that helps solve a crime',
    'ponder' => 'To think carefully about something',
    'locate' => 'Discover the exact place or position of something or someone',
    'abridge' => 'to shorten by leaving out some parts',
    'regulate' => 'to make rules or laws that control something',
    'modest' => 'not overly proud or confident',
    'impromptu' => 'not prepared ahead of time',
    'stint' => 'a period of time spent at a particular activity',
    'tranquil' => 'free from disturbance or turmoil',
    'mutiny' => 'a turning of a group against a person in charge'
];

$randWord = array_rand($words);
$shuffledWord = str_shuffle($randWord);
var_dump($shuffledWord);
var_dump($words[$randWord]);
require 'index-view.php';


# solution
// <?php 

// session_start();

# Array of words and hints to choose from
// $words = [
//     'evidence' => 'A discovery that helps solve a crime',
//     'ponder' => 'To think carefully about something',
//     'locate' => 'Discover the exact place or position of something or someone',
//     'abridge' => 'to shorten by leaving out some parts',
//     'regulate' => 'to make rules or laws that control something',
//     'modest' => 'not overly proud or confident',
//     'impromptu' => 'not prepared ahead of time',
//     'stint' => 'a period of time spent at a particular activity',
//     'tranquil' => 'free from disturbance or turmoil',
//     'mutiny' => 'a turning of a group against a person in charge'
// ];

# Default values - assumes “fresh game”
// $useNewWord = true;
// $lastWord = '';

# If we’ve just played the game, we’ll have results to show
//if (isset($_SESSION['results'])) {

    # Extract data from the session
    // $results = $_SESSION['results'];
    // $haveAnswer = $results['haveAnswer'];
    // $correct = $results['correct'];
    # extract the word from the last session
    // $lastWord = $_SESSION['word'];

    # If they got it correct we will pick a new word
    # $correct is boolean--setting variable to boolean
    // $useNewWord = $correct;
    
    # another way to say $useNewWord = $correct;
    // if($correct) {
    //     $useNewWord = true;
    // } else {
    //     $useNewWord = false;
    // }

    # Clear the results so if they refresh or come back they’re not seeing old results
//     $_SESSION['results'] = null;
// }

# Set the word
// if ($useNewWord) {
    # Pick random word wrapped in while loop that keeps running until new word - to Prevent using the same word that was used last time
    // while (!isset($word) or $word == $lastWord) {
    //     $word = array_rand($words);
    // }
// } else {
//     $word = $lastWord;
// }

# Update/set the word in the session so we can check their answer in process.php
// $_SESSION['word'] = $word;

# Extract a hint and scramble the word for displaying in the view
// $hint = $words[$word];
// $wordScrambled = str_shuffle($word);

# Load the view
// require 'index-view.php'; 