<?php
session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rammstein - Oficial</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/discografia.css">
    <link rel="stylesheet" href="css/allNewMiembros.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=BBH+Sans+Bartle&family=BBH+Sans+Bogle&family=Bitcount+Grid+Double:wght@100..900&display=swap" rel="stylesheet">
</head>
<body>
    
    <?php require_once 'header.php'; ?>
   
    <!-- SECCIÓN DE NOTICIAS -->
    <div class="news-container">
        <?php 
            try {
                require_once 'conecct.php';
                $sql = "SELECT * FROM news ORDER BY id DESC LIMIT 3";
                $query = $pdo->prepare($sql);
                $query->execute();
                $newss = $query->fetchAll(PDO::FETCH_OBJ);
                
                foreach($newss as $element) {
                    echo '<div class="box">
                            <h2>' . htmlspecialchars($element->title) . '</h2>
                            <p>' . htmlspecialchars($element->lorem) . '</p>
                            <img src="img/' . htmlspecialchars($element->image) . '" alt="' . htmlspecialchars($element->title) . '">
                        </div>';
                }
            } catch (Exception $e) {
                echo '<p>Error al cargar noticias.</p>';
            }
        ?>
    </div>

    <!-- SECCIÓN DE MIEMBROS -->
    <div class="center">
        <h1>Miembros</h1>
    </div>

    <div class="news-container">
        <?php 
            try {
                require_once 'conecct.php';
                $sql = "SELECT * FROM miembros ORDER BY fecha DESC";
                $query = $pdo->prepare($sql);
                $query->execute();
                $newss = $query->fetchAll(PDO::FETCH_OBJ);
                
                foreach($newss as $element) {
                    echo '<div class="box">
                            <h2>' . htmlspecialchars($element->nombre) . '</h2>
                            <p><strong>Instrumento:</strong> ' . htmlspecialchars($element->instrumento) . '</p>
                            <p><strong>Fecha:</strong> ' . htmlspecialchars($element->fecha) . '</p>
                            <p><strong>Ciudad:</strong> ' . htmlspecialchars($element->ciudad) . '</p>
                        </div>';
                }
            } catch (Exception $e) {
                echo '<p>Error al cargar miembros.</p>';
            }
        ?>
    </div>

</body>
</html>