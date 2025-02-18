<?php
$cart = ['apple', 'banana', 'orange', 'kiwi', 'grapes'];
echo "Total item".count($cart)."<br>";
foreach ($cart as $key => $value) {
    echo "Item ".($key+1).": ".$value."<br>";
}
echo "".count($cart)."<br>";
echo "Item 1: ".$cart[0]."<br>";
echo "".count($cart)."<br>";


?>