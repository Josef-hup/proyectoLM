<?php
session_start();
require 'conecct.php';
$login = isset($_POST['login']) ? trim($_POST['login']) : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

    if (strlen($login) < 2) {
    echo "Por favor, complete todos los campos del formulario.";
    exit;
    }
    if (strlen($password) < 2) {
        echo "La contraseña debe tener al menos 2 caracteres.";
        exit;
    }

    $salt = "sggggedfgdfgdfgdfgdfgdfgdfgdfgdfgdfg";
    $password = md5($salt . $password);

    
    $sql = "SELECT id, nombre FROM users WHERE login = ? AND password = ?";
    $query = $pdo->prepare($sql);
    $query->execute([$login, $password]);

    if ($query->rowCount() == 1) {
        $user = $query->fetch(PDO::FETCH_ASSOC);
        $_SESSION['login'] = $login;
        $_SESSION['usuario'] = $user['nombre'];
        $_SESSION['user_id'] = $user['id'];
        setcookie("login", $login, time() + 3600 * 24 * 30, "/");
        header("Location: user.php");
        exit;
    } else {
        echo "Login o contraseña incorrectos.";
        exit;
    }
?>