<?php
    session_start();
    require 'conecct.php';

    if (empty($_SESSION['login']) && empty($_COOKIE['login'])) {
        echo "No tiene permiso para agregar noticias.";
        exit;
    }

    $title = isset($_POST['title']) ? trim($_POST['title']) : '';
    $lorem = isset($_POST['lorem']) ? trim($_POST['lorem']) : ''; 
    $compleat_text = isset($_POST['compleat_text']) ? trim($_POST['compleat_text']) : '';
    $image = '';

    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $image_name = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];
        $image_path = 'img/' . basename($image_name);
        move_uploaded_file($image_tmp, $image_path);
        $image = basename($image_name);
    }

    // Вставляем новость в БД
    $sql = "INSERT INTO news (title, lorem, compleat_text, image) VALUES (?, ?, ?, ?)";
    $query = $pdo->prepare($sql);
    $query->execute([$title, $lorem, $compleat_text, $image]);

    header("Location: allNews.php");
    exit;

?>