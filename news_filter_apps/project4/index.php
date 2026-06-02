<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Фильтр по жанрам</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/no-flicker.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=BBH+Sans+Bartle&family=BBH+Sans+Bogle&family=Bitcount+Grid+Double:wght@100..900&display=swap" rel="stylesheet">
</head>
<body>
    <?php include('../../header.php'); ?>

    <div class="page-wrapper">
        <h2>Выберите жанр новостей</h2>
        
        <div class="form-row">
            <label><input type="radio" name="genre" value="рок" checked> Рок-музыка</label>
            <label><input type="radio" name="genre" value="поп"> Поп-музыка</label>
        </div>
        
        <button onclick="ShowMyNews()">Показать новости</button>
        <div id="content"></div>
    </div>

    <script src="script.js"></script>
</body>
</html>