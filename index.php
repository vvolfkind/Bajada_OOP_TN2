<?php
require 'loader.php';

// if(isset($_COOKIE['CookieMonster'])) {
//     $_SESSION['email'] = json_decode($_COOKIE['CookieMonster'], true)['email'];

// }
// $_SESSION['username'] = "Rodo";
// $_SESSION['email'] = 'rodo@gmail.com';

$pollo = [
    'email' => 'rodo@gmail.com',
    'username' => 'rodo',
    'navegador' => $_SERVER['HTTP_USER_AGENT']
];

$cookie = json_encode($pollo);

setcookie('CookieMonster', $cookie, time() + 3600);

//dd($_SERVER);



//dd($_SESSION);

?>

