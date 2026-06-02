<?php
header('Content-Type: application/json; charset=utf-8');
require_once 'conecct.php';

$number = isset($_POST['number']) ? intval($_POST['number']) : 0;
$order = isset($_POST['order']) && $_POST['order'] === 'asc' ? 'ASC' : 'DESC';

if ($number < 1 || $number > 5) {
    http_response_code(400);
    echo json_encode(['error' => 'El número debe ser un valor entre 1 y 5.']);
    exit;
}

try {
    $stmt = $pdo->query("SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = 'news' AND COLUMN_NAME = 'date'");
    $hasDate = (bool)$stmt->fetchColumn();

    $orderBy = $hasDate ? '`date`' : '`id`';
    $selectList = $hasDate ? 'id, title, lorem, `date` AS date_field' : 'id, title, lorem, `id` AS date_field';

    $sql = "SELECT $selectList FROM `news` ORDER BY $orderBy $order LIMIT ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$number]);
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode(['error' => 'Error de servidor: ' . $e->getMessage()]);
    exit;
}

$output = [];
foreach ($rows as $row) {
    $rawText = trim($row['lorem'] ?? '');
    $words = preg_split('/\s+/u', $rawText, -1, PREG_SPLIT_NO_EMPTY);
    $preview = implode(' ', array_slice($words, 0, 12));
    if (count($words) > 12) {
        $preview .= '...';
    }

    $output[] = [
        'id' => intval($row['id']),
        'title' => $row['title'] ?? 'Sin título',
        'date' => $row['date_field'] ?? date('Y-m-d'),
        'description' => $preview ?: 'No hay descripción disponible.',
        'fullText' => $rawText,
    ];
}

echo json_encode(['data' => $output], JSON_UNESCAPED_UNICODE);
