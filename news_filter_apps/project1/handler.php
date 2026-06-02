<?php
    // Подключаемся строго к твоей базе данных musica со скриншота
    $pdo = new PDO("mysql:host=127.0.0.1;dbname=musica;charset=utf8mb4", "root", ""); 
    
    // Принимаем все данные из JavaScript через $_POST
    $count = $_POST['count'];
    $sort = $_POST['sort'];
    $dateFrom = $_POST['dateFrom'];
    $dateTo = $_POST['dateTo'];

    // Проверяем галочку сортировки
    if ($sort === "true") {
        $dir = "DESC";
    } else {
        $dir = "ASC";
    }

    // Простой SQL-запрос в твоем стиле через BETWEEN по правильному полю created_at
    $sql = "SELECT * FROM news WHERE created_at BETWEEN '$dateFrom' AND '$dateTo' ORDER BY created_at $dir LIMIT $count";

    $statement = $pdo->query($sql);
    $news = $statement->fetchAll(PDO::FETCH_ASSOC);

    // Отдаем JSON обратно в JS
    echo json_encode($news);
?>