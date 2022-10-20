<?php

# for loop code influenced by: https://t4tutorials.com/php-program-to-count-the-vowels-digits-and-spaces-in-a-string/#:~:text=%2Fhtml%3E%20%3C%3F-,php%20if(%24_POST)%20%7B%20%24string%20%3D%20strtolower(%24_POST,%2C%20'%20')%3B%20echo%20%22


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

vowelCount('aapple');

// var_dump(vowelCount('apple'));
################################
# solution
// function vowelCount($word)
// {
//     $count = 0;

//     # str_split is used to convert the word to an array which we then loop through
//     # one character at a time
//     foreach (str_split($word) as $character) {
//         # If the character is a vowel, increment count by 1
//         if (in_array($character, ['a','e','i','o','u'])) {
//             $count++;
//         }
//     }

//     return $count;
// }

// var_dump(vowelCount('apple')); # Should yield 2
// var_dump(vowelCount('lynx')); # Should yield 0
// var_dump(vowelCount('hi')); # Should yield 1
// var_dump(vowelCount('mississippi')); # Should yield 4


/*
The following is an alternative solution to the vowel count function using
regular expressions (which were briefly discussed in the Week 8 Part 1 lecture video)
*/
// function vowelCount2($word)
// {
//     preg_match_all('/[aeiou]/i', $word, $matches);
//     return count($matches[0]);
// }


?>