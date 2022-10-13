<?php

session_start();


$answer = $_POST['answer'];

$haveAnswer = true;

if($answer == '') {
    $haveAnswer = false;
} else if ($answer == $randWord) {
   $correct = true;

} else {
    $correct = false;
}

$_SESSION['results'] = [
    'haveAnswer' => $haveAnswer,
    'correct' => $correct
];



header('Location: index.php');

# solution
// <?php

// session_start();

# Player’s guess
// $answer = $_POST['answer'];

# Word they’re trying to guess
// $word = $_SESSION['word'];

// $haveAnswer = true;

// if ($answer == '') {
//     $haveAnswer = false;
// } elseif ($answer == $word) {
//     $correct = true;
// } else {
//     $correct = false;
// }

# Store results in the session
// $_SESSION['results'] = [
//     'haveAnswer' => $haveAnswer,
//     'correct' => $correct,
//     'answer' => $answer,
// ];

# Redirect them back to the index page to see the results and have the option to play again
// header('Location: index.php');