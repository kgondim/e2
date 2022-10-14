<!-- prompts user to guess a random number that computer generates -->

<?php

function checkNumber($guess, $mysteryNumber)
{
    if($guess == $mysteryNumber) {
      return 'correct';
    } else if($guess > $mysteryNumber) {
        return 'high';
    } else {
        return 'low';
    }
}

// var_dump(checkNumber(6, 3));
// var_dump(checkNumber(3, 7));
// var_dump(checkNumber(3, 3));