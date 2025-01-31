<?php
for ($i = 0; $i < 10; $i++) {
    echo ($i . " ");
}

echo "\n";

for ($i = 1; $i < 10; $i++) {
    if ($i % 2 == 0) {
        echo ($i . " ");
    }
}

echo "\n";

$sum = 0;
for ($i = 1; $i <= 10; $i++) {
    $sum += $i;
}

echo $sum;
?>