<?php
    $pdo = new PDO("mysql:host=127.0.0.1;dbname=musica;charset=utf8mb4", "root", ""); 
    $keyword = $_POST['keyword'];

    // Используем оператор LIKE для поиска совпадений по тексту заголовка
    $sql = "SELECT * FROM news WHERE title LIKE '%$keyword%'";
    $statement = $pdo->query($sql);
    $news = $statement->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($news);
?>