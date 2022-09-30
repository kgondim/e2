<!DOCTYPE html>
<html lang='en'>

<head>

    <title></title>
    <meta charset='utf-8'>
    <link href=data:, rel=icon>

</head>

<body>
    <h1>Project 1</h1>

    <h2>Mechanics</h2>
    <ul>
        <li>
            <!-- Add steps/instructions to game laid out in plain language, like in readme -->

        </li>
    </ul>
    <h2>Results</h2>
    <!-- use unordered list? -->
    <p>
        You rolled a <?php echo $roll1; ?> and a <?php echo $roll2; ?>.
    </p>
    <p> Player 1 has a total of <?php echo $player1Total; ?> points.
    </p>
    <p>
        You rolled a <?php echo $roll3; ?> and a <?php echo $roll4; ?>.
    </p>
    <p> Player 2 has a total of <?php echo $player2Total; ?> points.
    </p>
    <p>
        The winner is <?php echo $message1; ?> !
    </p>
</body>

</html>