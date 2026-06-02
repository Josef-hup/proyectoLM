<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Фильтр новостей по датам</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/no-flicker.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=BBH+Sans+Bartle&family=BBH+Sans+Bogle&family=Bitcount+Grid+Double:wght@100..900&display=swap" rel="stylesheet">
</head>
<body>
    <?php include('../../header.php'); ?>

    <div class="page-wrapper">
        <h2>Фильтр новостей</h2>
        
        <div class="form-row">
            <label>Количество новостей (макс. 5):</label>
            <input type="number" id="countInput" min="1" max="5" value="1" style="color:#000;background:#fff;border:1px solid rgba(0,0,0,0.2)">
        </div>
        
        <div class="form-row">
            <label>С даты:</label>
            <input type="date" id="dateFrom" style="color:#000;background:#fff;border:1px solid rgba(0,0,0,0.2)">
        </div>
        
        <div class="form-row">
            <label>По дату:</label>
            <input type="date" id="dateTo" style="color:#000;background:#fff;border:1px solid rgba(0,0,0,0.2)">
        </div>
        
        <div class="checkbox-row">
            <label>
                <input type="checkbox" id="sortCheckbox"> Сортировать по дате (Desc/Asc)
            </label>
        </div>
        
        <button onclick="ShowMyNews()" style="color:#000;background:#fff;border:1px solid rgba(0,0,0,0.2)">Показать новости</button>
        
        <div id="content"></div>
    </div>

    <script src="script.js"></script>
</body>
</html>