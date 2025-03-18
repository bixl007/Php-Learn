<?php
    function change_name(&$name) {
        echo "Hello $name";
        $name = $name . ' Smith';
        echo "Hello $name\n";
    }

    $name = 'Harry';
    echo "Hello $name\n";
    change_name($name);
    echo "Hello $name\n";
?>
