<!DOCTYPE html>
<html lang='en'>

<head>

    <title>Project 2 - Dice</title>
    <meta charset='utf-8'>
    <link href=data:, rel=icon>

</head>

<body>

    <h1>Project 2 - Guess the Dice Roll</h1>

    <form method='POST' action='process.php'>


        <input type='number' id='guess' name='guess' min='2' max='12' required maxlength='2' size='5'
            value='<? echo $guess; ?>'><label for='guess'> Guess (number 2-12):</label>

        <button type='submit'>Guess</button>
    </form>

    <!-- https://stackoverflow.com/questions/61623943/how-to-keep-the-values-in-the-input-fields-when-submitting-a-form-in-php -->

    <?php if(isset($results)) { ?>
    <h2>Results</h2>
    You guessed <?php echo $results['guess']; ?>. The dice roll is <?php echo $results['player']; ?>.
    <?php if ($winner) { ?>
    You won!
    Number of points: <?php echo $my_wins['points']; ?>
    <?php } else { ?>
    You lost, please try again!
    <?php } ?>

    <?php } ?>


</body>

</html>