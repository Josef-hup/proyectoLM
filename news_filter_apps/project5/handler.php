<?php
    $pdo = new PDO("mysql:host=127.0.0.1;dbname=musica;charset=utf8mb4", "root", ""); 
    
    $id = $_POST['id'];

    // Строгий поиск в таблице по первичному ключу id
    $sql = "SELECT * FROM news WHERE id = '$id'";

    $statement = $pdo->query($sql);
    $news = $statement->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($news);
?>