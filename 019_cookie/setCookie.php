<?php
setcookie('username', 'amit', time() + 86400);
isset($_COOKIE['username']) ? print_r($_COOKIE['username']) : print_r('Cookie not set');
setcookie('email', 'slkdfjj@gmail.com', time() + 86400);
isset($_COOKIE['email']) ? print_r($_COOKIE['email']) : print_r('Cookie not set');
setcookie('age', '25', time() + 86400);
isset($_COOKIE['age']) ? print_r($_COOKIE['age']) : print_r('Cookie not set');
echo count($_COOKIE);
unset($_COOKIE['age']);
echo count($_COOKIE);
?>


