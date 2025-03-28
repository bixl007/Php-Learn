<?php
function customError($errno, $errmgs, $errfile)
{
    echo "The error with error number $errno occurred in file $errfile with the following message: $errmgs";
}
set_error_handler("customError");
echo $test;


?>