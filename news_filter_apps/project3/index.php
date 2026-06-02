<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Поиск новостей</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/no-flicker.css">
</head>
<body>
    <?php include('../../header.php'); ?>

    <div class="page-wrapper">
        <h2>Поиск по ключевому слову</h2>
        <div class="form-row">
            <label>Введите слово:</label>
            <input type="text" id="keywordInput" placeholder="Что ищем?" style="color:#000;background:#fff;border:1px solid rgba(0,0,0,0.2)">
        </div>
        <button onclick="ShowMyNews()" style="color:#000;background:#fff;border:1px solid rgba(0,0,0,0.2)">Найти</button>
        <div id="content"></div>
    </div>

    <script src="script.js"></script>
</body>
</html>