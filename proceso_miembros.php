<?php
    session_start();
    require 'conecct.php';

    if (empty($_SESSION['login']) && empty($_COOKIE['login'])) {
        echo "No tiene permiso para agregar noticias.";
        exit;
    }

    $nombre = $_POST['nombre'];
    $instrumento = $_POST['instrumento'];
    $fecha = $_POST['fecha'];
    $ciudad = $_POST['ciudad'];




    $sql = "INSERT INTO miembros (nombre, instrumento, fecha, ciudad) VALUES (?, ?, ?, ?)";
    $query = $pdo->prepare($sql);
    $query->execute([$nombre, $instrumento, $fecha, $ciudad]);

    header("Location: index.php");
    exit;

?>