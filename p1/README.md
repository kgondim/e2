# Project 1
+ By: Kristen Gondim
+ URL: <http://e2p1.vestige-kg.me>

# Game planning
#### Game logic:
Create an array for each die containing numbers 1-6.
For loop repeats the following steps to make a round that is played five times:
+ Choose a random element from each die and assign each to its own variable.
+ Calculate the total dice roll and allocate to Player 1.
+ Repeat first two steps for Player 2.

Determine winner:
+ Compare Player 1 roll total to Player 2 roll total. 
+ If Player 1 score is greater, Player 1 is winner. 
+ If Player 2 score is greater, Player 2 is winner.
+ Otherwise, if tied, neither player wins the round. 

Create a multidimensional array ($results) with a key/value pair for each variable created for the game to iterate over and report results in the view.
#### In the view:
Foreach loop iterates over elements in results array to display specified values plugged into the surrounding text to report results for each of the five rounds.

For each of five rounds, following results reported: 
+ Player 1's roll for each die and player total for round.
+ Player 2's roll for each die and player total for round.
+ The winner of the round.


