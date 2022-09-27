<?php

$moves = ['rock', 'paper', 'scissors']; #array of strings

$strawLengths = [2, 2, 2, 2, 2, 1];

$mixed = ['rock', 1, .04, true];

// echo $moves[0];
// echo $moves[1];
// echo $moves[2];
// echo $moves[3]; # Notice: Undefined offset: 3

// var_dump($moves);
# . . . . . . . .   (min, max)
$randomNumber = rand(0, 2);

// var_dump($randomNumber);
# . . . .   .  $randomNumber becomes the index number
$move = $moves[$randomNumber];

// var_dump($move);

# Associative arrays: allows us to define own keys

$coin_values = [
    'penny' => .01, 
    'nickel' => .05, 
    'dime' => .10, 
    'quarter' => .25
];

// var_dump($coin_values['quarter']);


$coin_counts = [
    'penny' => 100,
    'nickel' => 25,
    'dime' => 100, 
    'quarter' => 34
];


# alphabetical sort by values
asort($coin_counts);
# reverse sort on values
arsort($coin_counts);
# sort by key names
krsort($coin_counts);

// var_dump($coin_counts);

// $cards = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
// shuffle($cards);

// var_dump($cards);
# $key and $value are aliases and can be substituted with whatever 
# here key and value actual represents the key/value pairs

$total = 0;

# multidimensional array
$coins = [
    'penny' => [
        'count' => 100, 
        'value' => .01
    ],
    'nickel' => [
        'count' => 25, 
        'value' => .05
    ],
    'dime' => [
        'count' => 100,
         'value' => .10
    ],
    'quarter' => [
        'count' => 34, 
        'value' => .25
    ],
    'halfDollar' => [
        'count' => 10, 
        'value' => .50
    ]  
];

foreach ($coin_counts as $coin => $count) {
    $total = $total + ($count * $coin_values[$coin]);
}

foreach ($coins as $coin => $info){
    $total = $total + ($info['count'] * $info['value']);
}

// var_dump($total);

// $cards = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
// shuffle($cards);
# spliced array and split bw two players
// $playerCards = array_splice($cards, 0, count($cards) / 2);
// $computerCards = $cards;
// var_dump($playerCards);

// $playerDraw = $playerCards[count($playerCards) - 1];

// $playerDraw = array_pop($playerCards);
// var_dump($playerCards);
// var_dump($playerDraw);

#set up array of cards
$cards = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
shuffle($cards);
// var_dump($cards);

#initialize empty arrays for playerCards and computerCards
$playerCards = [];
$computerCards = [];

#distribute cards in alternating fashion--maybe array_shift?
for ($i = 1; $i <= 10; $i+=2) {
    $playerCards = array_shift($cards);
    var_dump($playerCards);
}
$computerCards = $cards;
var_dump($computerCards);
    






// foreach ($cards as $index => $card) {
//     if($index % 2 == 0) {
//         $playerCards[] = $card;
//     } else {
//        $computerCards[] = $card;
//     }
// };

// $cards = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
// shuffle($cards);
// $playerCards = [];
// $computerCards = [];
// $i = 0;
// while (i < 10) {
//     $playercards[] = $i;
//     $i+=2;
// }
    









// $str = "Mary Had A Little Lamb and She LOVED It So";
// $str = strtolower($str);
// echo $str; // Prints mary had a little lamb and she loved it so
// var_dump($str);

// $stringA = "Mary Had A Little Lamb and She LOVED It So";
// $stringB = "Mary";
// stripos($stringA, $stringB);
// var_dump(stripos($stringA, $stringB));

// $letters = ['a', 'x', 'f', 'l', 'b'];

// asort($letters);
// var_dump($letters);
// var_dump(asort($letters));

// $coin = ['heads', 'tails'];
# player's choice
// $randomNumber = rand(0,1);
// $player1Choice = $coin[$randomNumber];

// var_dump($player1Choice);
# coin flip
// $randomNumber = rand(0,1);
// $flip = $coin[$randomNumber];

// if ($player1Choice == $flip) {
//     var_dump('Player 1 wins!');
// } else {
//     var_dump('Player 1 lost!');
// }


// $moves = ['rock', 'paper', 'scissors'];
// $player1Move = $moves[rand(0, 2)];
// $player2Move = $moves[rand(0, 2)];

// var_dump($player1Move);
// var_dump($player2Move);

// if ($player1Move == $player2Move) {
    // var_dump('Tie');
// } elseif ($player1Move == 'rock' and $player2Move == 'paper') {
    // var_dump('Player 2 wins');
// } elseif ($player1Move == 'rock' and $player2Move == 'scissors') {
    // var_dump('Player 1 wins!');
// } 

// $numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
// foreach ($numbers as $key => $number) {
    // var_dump($number);
// }

// for ($i = 0; $i <= 20; $i++) {
    // var_dump($i);
// }

## use when don't know how many iterations e.g., don't know how many rounds of game
// $i =0;
// while ($i <= 10) {
//     var_dump($i);
//     $i++; # equivalent to $i = $i + 1;
// }

// $answer = 5;
// $guess = null;

// while ($guess != $answer) {
//     $guess = rand(0, 10); 
//     var_dump('Guess: ' . $guess);
// }