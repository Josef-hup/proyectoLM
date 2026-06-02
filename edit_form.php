<?php
require_once 'conecct.php'; // Твое подключение к БД

$id = $_GET['id'] ?? null;
if (!$id) { die("ID новости не указан"); }

$sql = "SELECT * FROM news WHERE id = :id";
$query = $pdo->prepare($sql);
$query->execute(['id' => $id]);
$news = $query->fetch(PDO::FETCH_OBJ);

if (!$news) { die("Новость не найдена"); }
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Редактировать новость</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        body { background-color: #111; font-family: sans-serif; }
        .edit-container { max-width: 800px; margin: 50px auto; color: white; background: #222; padding: 20px; border: 1px solid white; border-radius: 8px; }
        .edit-container label { display: block; margin-bottom: 5px; font-weight: bold; color: #aaa; }
        .edit-container input[type="text"], .edit-container textarea { width: 100%; margin-bottom: 20px; padding: 12px; background: #333; color: white; border: 1px solid #555; box-sizing: border-box; }
        .edit-container input[type="file"] { margin-bottom: 20px; color: #fff; }
        .btn-save { background: #28a745; color: white; padding: 12px 25px; border: none; cursor: pointer; font-size: 16px; border-radius: 4px; }
        .btn-save:hover { background: #218838; }
        .current-img { margin-bottom: 10px; border: 1px solid #444; padding: 5px; display: block; }
    </style>
</head>
<body>
    <div class="edit-container">
        <h1>Редактировать новость #<?php echo $news->id; ?></h1>
        
        <form action="update.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $news->id; ?>">

            <label>Заголовок:</label>
            <input type="text" name="title" value="<?php echo htmlspecialchars($news->title); ?>" required>

            <label>Текст новости:</label>
            <textarea name="lorem" rows="8" required><?php echo htmlspecialchars($news->lorem); ?></textarea>

            <label>Текущее изображение:</label>
            <?php if ($news->image): ?>
                <img src="img/<?php echo $news->image; ?>" width="150" class="current-img">
            <?php endif; ?>
            
            <label>Загрузить новое изображение (оставьте пустым, если не хотите менять):</label>
            <input type="file" name="new_image" accept="image/*">

            <div style="margin-top: 20px;">
                <button type="submit" class="btn-save">Сохранить изменения</button>
                <a href="editarNews.php" style="color: #bbb; margin-left: 20px; text-decoration: none;">Отмена</a>
            </div>
        </form>
    </div>
</body>
</html>