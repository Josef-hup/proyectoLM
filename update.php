<?php
require_once 'conecct.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id    = $_POST['id'];
    $title = $_POST['title'];
    $lorem = $_POST['lorem'];

    // Проверяем, был ли выбран файл
    if (isset($_FILES['new_image']) && $_FILES['new_image']['error'] === UPLOAD_ERR_OK) {
        $image_name = $_FILES['new_image']['name'];
        $tmp_name   = $_FILES['new_image']['tmp_name'];
        
        // Перемещаем файл в папку img
        move_uploaded_file($tmp_name, 'img/' . $image_name);

        // SQL запрос С обновлением картинки
        $sql = "UPDATE news SET title = :title, lorem = :lorem, image = :image WHERE id = :id";
        $params = [
            'title' => $title,
            'lorem' => $lorem,
            'image' => $image_name,
            'id'    => $id
        ];
    } else {
        // SQL запрос БЕЗ обновления картинки (оставляем старую)
        $sql = "UPDATE news SET title = :title, lorem = :lorem WHERE id = :id";
        $params = [
            'title' => $title,
            'lorem' => $lorem,
            'id'    => $id
        ];
    }

    try {
        $query = $pdo->prepare($sql);
        $query->execute($params);
        
        // Успешно обновили — возвращаемся
        header("Location: editarNews.php");
        exit;
    } catch (PDOException $e) {
        die("Ошибка при обновлении базы данных: " . $e->getMessage());
    }
} else {
    die("Некорректный метод отправки данных.");
}