<?php
$points = 0;

while (true) {
    $roll = rand(1, 6);
    echo "You rolled a $roll.\n";

    if ($roll == 6) {
        echo "Game over! You rolled a 6.\n";
        break;
    } elseif ($roll % 2 != 0) {
        $points += $roll;
        echo "You gained $roll points. Total points: $points\n";
    } else {
        echo "No points gained. Total points: $points\n";
    }
    time_nanosleep(1, 0);
}
?>