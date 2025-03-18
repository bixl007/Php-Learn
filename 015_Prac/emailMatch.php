<?php
function emailMatch($email)
{
    $pattern = "/^[a-zA-Z0-9._%+-]+@/";
    if (preg_match($pattern, $email)) {
        return true;
    }
    return false;
}

$str = "abc@gmail.com";
echo emailMatch($str) ? 'true' : 'false';

?>