<?php
    $pdo = new PDO("mysql:host=127.0.0.1;dbname=musica;charset=utf8mb4", "root", ""); 
    
    $genre = $_POST['genre'];

    // Ищем в базе новости, у которых жанр совпадает с выбранным
    $sql = "SELECT * FROM news WHERE genre = '$genre'";

    $statement = $pdo->query($sql);
    $news = $statement->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($news);
?>