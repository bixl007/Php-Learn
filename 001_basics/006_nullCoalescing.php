<?php

$a = null;
$b = null;
$c = 'First non-null value';
$d = 'Another value';

$firstNonNull = $a ?? $b ?? $c ?? $d;

echo $firstNonNull;

?>