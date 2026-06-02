<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Поиск новости по ID</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/no-flicker.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=BBH+Sans+Bartle&family=BBH+Sans+Bogle&family=Bitcount+Grid+Double:wght@100..900&display=swap" rel="stylesheet">
</head>
<body>
    <?php include('../../header.php'); ?>

    <div class="page-wrapper">
        <h2>Поиск новости по её ID</h2>
        
        <div class="form-row">
            <label for="idInput">Введите ID новости:</label>
            <input type="number" id="idInput" min="1" placeholder="Например: 1">
        </div>
        
        <button onclick="ShowMyNews()">Найти</button>
        <div id="content"></div>
    </div>

    <script src="script.js"></script>
</body>
</html>