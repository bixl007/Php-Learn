<?php
    function add() {
        $args = func_get_args();

        foreach ($args as $arg) {
            if (!is_numeric($arg)) {
                echo "Invalid input: $arg\n";
                return;
            }
        }
        
    }
?>