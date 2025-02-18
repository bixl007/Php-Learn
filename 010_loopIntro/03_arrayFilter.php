<?php
$cart = ['apple', 'banana', 'orange', 'kiwi', 'grapes'];
sort($cart);
echo "Total item" . count($cart) . "<br>";
foreach ($cart as $key => $value) {
    echo " " . $key . " " . $value . " ";
}
asort($cart);
echo "<br>";
foreach ($cart as $key => $value) {
    echo " " . $key . " " . $value . " ";
}



?>