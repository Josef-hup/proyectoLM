<?php
// Говорим браузеру, что сервер возвращает JSON в UTF-8
header('Content-Type: application/json; charset=utf-8');

try {
    // ПОДКЛЮЧЕНИЕ: Меняем dbname на твоё реальное название — musica
    $pdo = new PDO("mysql:host=127.0.0.1;dbname=musica;charset=utf8mb4", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Принимаем количество новостей и жестко контролируем рамки от 1 до 5
    $count = isset($_POST['count']) ? (int)$_POST['count'] : 1;
    if ($count < 1) $count = 1;
    if ($count > 5) $count = 5;

    // Принимаем даты из JavaScript
    $dateFrom = isset($_POST['dateFrom']) ? $_POST['dateFrom'] : '';
    $dateTo = isset($_POST['dateTo']) ? $_POST['dateTo'] : '';

    // Определяем направление сортировки по галочке чекбокса
    if (isset($_POST['sort']) && $_POST['sort'] === 'true') {
        $dir = "DESC";
    } else {
        $dir = "ASC";
    }

    // Если даты не переданы, сразу возвращаем пустой ответ
    if ($dateFrom === '' || $dateTo === '') {
        echo json_encode([]);
        exit;
    }

    // SQL-ЗАПРОС: Заменили date на твоё созданное поле created_at
    $sql = "SELECT * FROM news WHERE created_at BETWEEN :dateFrom AND :dateTo ORDER BY created_at $dir LIMIT :limit";
    
    $statement = $pdo->prepare($sql);
    $statement->bindValue(':dateFrom', $dateFrom, PDO::PARAM_STR);
    $statement->bindValue(':dateTo', $dateTo, PDO::PARAM_STR);
    $statement->bindValue(':limit', $count, PDO::PARAM_INT);
    
    $statement->execute();

    // Забираем результаты из базы
    $news = $statement->fetchAll(PDO::FETCH_ASSOC);

    // Отправляем массив новостей обратно в JavaScript в формате JSON
    echo json_encode($news, JSON_UNESCAPED_UNICODE);

} catch (Exception $exception) {
    // Если произошла ошибка с БД, отдаем пустой JSON
    echo json_encode([]);
}
?>
