<?php
session_start();
    require 'conecct.php';

    $login = isset($_POST['login']) ? trim($_POST['login']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    if ($login === '') {
        echo "Falta el login.";
        exit;
    }

    if ($email === '') {
        echo "Falta el email.";
        exit;
    }

    if ($password === '') {
        echo "Falta la contraseña.";
        exit;
    }

    if (strlen($login) < 2) {
        echo "El login debe tener al menos 2 caracteres.";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "El email no es válido.";
        exit;
    }

    if (strlen($password) < 4) {
        echo "La contraseña debe tener al menos 4 caracteres.";
        exit;
    }

    // pasword hashing
    $salt = "sggggedfgdfgdfgdfgdfgdfgdfgdfgdfgdfg";
    $password = md5($salt . $password);
    $nombre = $login;

    $sql = "INSERT INTO users (login, nombre, email, password) VALUES (?, ?, ?, ?)";
    $query = $pdo->prepare($sql);
    $query->execute([$login, $nombre, $email, $password]);

    header("Location: index.php");
    exit;

?>