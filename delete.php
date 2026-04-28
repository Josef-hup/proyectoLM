<?php
require_once 'conecct.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Удаляем новость из БД
    $sql = "DELETE FROM news WHERE id = ?";
    $query = $pdo->prepare($sql);
    $query->execute([$id]);

    header("Location: editarNews.php");
    exit;
} else {
    echo "ID новости не указан.";
}
?>