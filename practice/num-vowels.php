<?php

# for loop code influenced by: https://t4tutorials.com/php-program-to-count-the-vowels-digits-and-spaces-in-a-string/#:~:text=%2Fhtml%3E%20%3C%3F-,php%20if(%24_POST)%20%7B%20%24string%20%3D%20strtolower(%24_POST,%2C%20'%20')%3B%20echo%20%22

$word = "heeet";
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
    echo "Number of vowels: " . $num;
}

vowelCount($word);

?>