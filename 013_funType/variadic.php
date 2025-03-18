<?php
function mul(...$numbers)
{
    $prod = 1;
    foreach ($numbers as $n) {
        $prod += $n;
    }
    return $prod;
}

echo mul(1, 2, 3, 4, 5);
echo "\n";
echo mul(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
echo "\n";
echo mul(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15);
echo "\n";
echo mul(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20);
echo "\n";
?>