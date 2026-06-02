<?php
header('Content-Type: application/json; charset=utf-8');

try {
    $pdo = new PDO(
        'mysql:host=127.0.0.1;dbname=my_cool_site;charset=utf8mb4',
        'root',
        '',
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]
    );

    $category = isset($_POST['category']) ? trim($_POST['category']) : '';
    $allowed = ['sports', 'politics', 'technology'];

    if ($category === '' || !in_array($category, $allowed, true)) {
        echo json_encode([], JSON_UNESCAPED_UNICODE);
        exit;
    }

    $stmt = $pdo->prepare('SELECT * FROM news WHERE category = :category ORDER BY date DESC');
    $stmt->bindValue(':category', $category, PDO::PARAM_STR);
    $stmt->execute();

    $news = $stmt->fetchAll();
    echo json_encode($news, JSON_UNESCAPED_UNICODE);
} catch (PDOException $exception) {
    echo json_encode([], JSON_UNESCAPED_UNICODE);
}
?>
