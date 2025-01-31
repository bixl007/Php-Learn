// Simulate a simple game loop where the player roll a die. The game ends if the player roll a 6. If they roll an odd
number they gain points(10), and the loop continues until a 6 is rolled. If even num, no points , Caculate total score

<?php
$score = 0;
while (true) {
    $roll = rand(1, 6);
    echo "You have got $roll num\n";
    if ($roll == 6) {
        echo "The game is over\n";
        break;
    } elseif ($roll % 2 == 1) {

        echo "Your total score is: \n" . $score;
        $score += 10;
    } elseif ($roll % 2 == 0) {
        echo "0 score\n";
        $score = $score + 1;
    }
}
echo "Your total score is: \n" . $score;
?>