<?php
session_start();
    require 'conecct.php';

<<<<<<< HEAD
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
=======
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
>>>>>>> 0b6c7400e42114a0e7d031e1f98ad78eed3d41dc
        echo "El login debe tener al menos 2 caracteres.";
        exit;
    }

<<<<<<< HEAD
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
=======
    // pasword hashing
    $salt = "sggggedfgdfgdfgdfgdfgdfgdfgdfgdfgdfg";
    $password = md5($salt . $password);


    $sql = "INSERT INTO users (login, nombre, email, password) VALUES (?, ?, ?, ?)";
    $query = $pdo->prepare($sql);
    $query ->execute([$login, $nombre, $email, $password]);
>>>>>>> 0b6c7400e42114a0e7d031e1f98ad78eed3d41dc

    header("Location: index.php");
    exit;

?>