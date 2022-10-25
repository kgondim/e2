<!DOCTYPE html>
<html lang='en'>

<head>

    <title>Project 2 - Dice</title>
    <meta charset='utf-8'>
    <link href=data:, rel=icon>

</head>

<body>

    <h1>Project 2 - Guess the Dice Roll</h1>
    <h2>Mechanics</h2>
    <ul>
        <li>Guess the sum from the dice role</li>
        <li>Press the button for the computer to roll the dice and compare your guess</li>
        <li>If you guess the correct sum, you win!</li>
    </ul>

    <form method='POST' action='process.php'>


        <input type='number' id='guess' name='guess' min='2' max='12' required maxlength='2' size='10' value=''><label
            for='guess'> Guess (number 2-12):</label>

        <button type='submit'>Guess</button>
    </form>


    <?php if(isset($results)) { ?>
    <h2>Results</h2>
    You guessed <?php echo $results['guess']; ?>. The dice roll is <?php echo $results['player']; ?>.
    <?php if ($winner) { ?>
    You won!
    <?php } else { ?>
    You lost, please try again!
    <?php } ?>

    <?php } ?>


</body>

</html>