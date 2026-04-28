<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/no-flicker.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=BBH+Sans+Bartle&family=BBH+Sans+Bogle&family=Bitcount+Grid+Double:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/discografia.css">
    <link rel="stylesheet" href="css/allNewMiembros.css">
    <script src="js/jquery-4.0.0.min.js"></script>
    <style>

    </style>
</head>
<body>
    
   <?php require_once 'header.php'; ?>
   

   <h1>Noticias</h1>
   <div class="news-container" id="newsContainer">
        <?php 
            require_once 'conecct.php';
            $sql = "SELECT * FROM news ORDER BY id DESC LIMIT 3";
            $query = $pdo->prepare($sql);
            $query->execute();
            $newss = $query->fetchAll(PDO::FETCH_OBJ);
            foreach($newss as $element)
            {
                $title = htmlspecialchars($element->title, ENT_QUOTES, 'UTF-8');
                $lorem = htmlspecialchars($element->lorem, ENT_QUOTES, 'UTF-8');
                $image = htmlspecialchars($element->image, ENT_QUOTES, 'UTF-8');
                echo '<div class="box">'
                    . '<h2>'.$title.'</h2>'
                    . '<p>'.$lorem.'</p>'
                    . '<img src="img/'.$image.'" alt="">'
                    . '</div>';
            }
        ?>
    </div>

    <div class="center">
             <h1>Miembros</h1>
    </div>


        <div class="news-container">
            <div class="box">
                <h2>Till Lindemann</h2>
                <p>Vocalista</p>
                <p>Unido desde: 1994</p>
                <p>Berlín, Alemania</p>
                
            </div>
            <div class="box">
                <h2>Richard Z. Kruspe</h2>
                <p>Guitarra Principal</p>
                <p>Unido desde: 1994</p>
                <p>Berlín, Alemania</p>
            </div>
            <div class="box">
                <h2>Paul H. Landers</h2>
                <p>Guitarra Rítmica</p>
                <p>Unido desde: 1994</p>
                <p>Berlín, Alemania</p>
            </div>
            <div class="box">
                <h2>Oliver Riedel</h2>
                <p>Bajo</p>
                <p>Unido desde: 1994</p>
                <p>Berlín, Alemania</p>
            </div>
            <div class="box">
                <h2>Christoph Schneider</h2>
                <p>Batería</p>
                <p>Unido desde: 1994</p>
                <p>Berlín, Alemania</p>
            </div>
            <div class="box">
                <h2>Flake Lorenz</h2>
                <p>Teclados</p>
                <p>Unido desde: 1994</p>
                <p>Berlín, Alemania</p>
            </div>
    </div>
</body>
</html>