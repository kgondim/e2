<!-- prompts user to guess a random number that computer generates -->

<?php

// function checkNumber($guess, $mysteryNumber)
// {
//     if($guess == $mysteryNumber) {
//       return 'correct';
//     } else if($guess > $mysteryNumber) {
//         return 'high';
//     } else {
//         return 'low';
//     }
// }

// var_dump(checkNumber(6, 3));
// var_dump(checkNumber(3, 7));
// var_dump(checkNumber(3, 3));


# for loop code influenced by: https://t4tutorials.com/php-program-to-count-the-vowels-digits-and-spaces-in-a-string/#:~:text=%2Fhtml%3E%20%3C%3F-,php%20if(%24_POST)%20%7B%20%24string%20%3D%20strtolower(%24_POST,%2C%20'%20')%3B%20echo%20%22

$word = "kristen";
function vowelCount($word)
{
    
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $len = strlen($word);
    $num = 0;

    for ($i=0; $i<$len; $i++) {
        if (in_array($word[$i], $vowels)) {
            $num++;
        }
    }
    echo "Number of vowels:". $num;
}

vowelCount($word);

?>