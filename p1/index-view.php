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
        <li>Player 1 and Player 2 each rolls a pair of dice and gets a total for the roll.</li>
        <li>The numbers from each players' roll is summed and compared to each other. If Player 1's sum is greater, They
            win. If Player 2's
            sum is greater, they win. If tied, neither player wins the round.</li>
        <li>The winner of the round is announced.</li>
        <li>Game repeats for five rounds.</li>
    </ul>
    <h2>Results</h2>
    <?php foreach ($results as $key => $result) { ?>
    <ul>
        <li>Round <?php echo $key + 1 ?>:
        <li>Player 1 rolled a <?php echo $result['diceRoll1']; ?> and a <?php echo $result['diceRoll2']; ?>, which
            equals
            <?php echo $result['player1']; ?>.
        </li>
        <li>Player 1 has a total of <?php echo $result['player1'] ?> points.
        </li>
        <li>Player 2 rolled a <?php echo $result['diceRoll3']; ?> and a <?php echo $result['diceRoll4']; ?>, which
            equals
            <?php echo $result['player2']; ?>.
        </li>
        <li>Player 2 has a total of <?php echo $result['player2'] ?> points.
        </li>
        <li>The winner of the round is <?php echo $result['winner']; ?>!
        </li>
    </ul>


    <?php } ?>

</body>

</html>