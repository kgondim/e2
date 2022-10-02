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
    <?php foreach($results as $result) { ?>
    <ul>
        <li>Player 1 rolled a <?php echo $result['diceRoll1']; ?> and a <?php echo $result['diceRoll2']; ?>, which
            equals
            <?php echo $result['player1']; ?>.
        </li>
        <li>Player 1 has a total of <?php echo $result['player1'] ?> points.
        </li>
        <li>Player 1 rolled a <?php echo $result['diceRoll3']; ?> and a <?php echo $result['diceRoll4']; ?>, which
            equals
            <?php echo $result['player2']; ?>.
        </li>
        <li>Player 1 has a total of <?php echo $result['player2'] ?> points.
        </li>
        <li>The winner of the round is <?php echo $message1; ?>!
        </li>
    </ul>

    <ul>
        <li>Player 1 cumulative total <?php echo $result['player1'] ?>
        </li>
        <li>Player 2 cumulative total <?php echo $result['player2'] ?>
        </li>
    </ul>
    <?php } ?>

</body>

</html>