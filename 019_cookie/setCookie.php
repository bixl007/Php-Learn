<?php
setcookie('username', 'amit', time() + 86400);
isset($_COOKIE['username']) ? print_r($_COOKIE['username']) : print_r('Cookie not set');
setcookie('email', 'slkdfjj@gmail.com', time() + 86400);
isset($_COOKIE['email']) ? print_r($_COOKIE['email']) : print_r('Cookie not set');
setcookie('age', '25', time() + 86400);
isset($_COOKIE['age']) ? print_r($_COOKIE['age']) : print_r('Cookie not set');
echo count($_COOKIE);
echo count($_COOKIE);
print_r($_COOKIE);

echo '<br>';
echo "All Cookies: <br>";
foreach($_COOKIE as $key => $value) {
    echo $key . ' ' . $value . '<br>';
}


?>


<!-- Max size stored in cookie is 4kb -->