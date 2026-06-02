<?php
session_start();
    require 'conecct.php';

    $login = $_POST['login'];
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    if (strlen($login) < 2) {
    echo "Por favor, complete todos los campos del formulario.";
    exit;
    }
    if (strlen($password) < 2) {
        echo "La contraseña debe tener al menos 2 caracteres.";
        exit;
    }
        if (strlen($email) < 2 && !strpos($email, '@')) {
        echo "El email debe tener al menos 2 caracteres y contener un '@'.";
        exit;
    }
        if (strlen($nombre) < 2) {
        echo "El nombre debe tener al menos 2 caracteres.";
        exit;
    }
        if (strlen($login) < 2) {
        echo "El login debe tener al menos 2 caracteres.";
        exit;
    }

    // pasword hashing
    $salt = "sggggedfgdfgdfgdfgdfgdfgdfgdfgdfgdfg";
    $password = md5($salt . $password);


    $sql = "INSERT INTO users (login, nombre, email, password) VALUES (?, ?, ?, ?)";
    $query = $pdo->prepare($sql);
    $query ->execute([$login, $nombre, $email, $password]);

    header("Location: index.php");
    exit;

?>