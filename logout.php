<?php
session_start(); 

$_SESSION = array();

session_destroy();

if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time()-3600, '/');
}

if (isset($_COOKIE['login'])) {
    setcookie('login', '', time() - 3600, '/');
    unset($_COOKIE['login']);
}

header("Location: index.php");
exit();
?>