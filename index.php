<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=BBH+Sans+Bartle&family=BBH+Sans+Bogle&family=Bitcount+Grid+Double:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/discografia.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/allNewMiembros.css">
    <script src="js/jquery-4.0.0.min.js"></script>
</head>
<body background="img/bg.jpg">
    
   <?php require_once 'header.php'; ?>
   
   <button class="tgogle-btn" id="toggleNewsBtn" style="width: 50px; height: 50px; background: none; border: none; cursor: pointer; padding: 0; display: flex; align-items: center; justify-content: center; margin: 20px auto;">
       <img src="img/signo-menos.png" alt="Ocultar/Mostrar" style="width: 100%; height: 100%;" class="logo">
   </button>
   <h1>Noticias</h2>
   <div class="news-container" id="newsContainer">
        <div class="box">
            <h2>Nuevo Álbum 2026</h2>
            <p>Rammstein lanza su nuevo álbum con 12 canciones inéditas que marcan un antes y después en su historia musical. Un trabajo revolucionario que consolida su posición como la banda más importante de rock industrial.</p>
            <img src="img/merch1.avif" alt="Nuevo Álbum">
        </div>
        <div class="box">
            <h2>Gira Mundial 2026</h2>
            <p>La banda anuncia una gira mundial que cubrirá 45 países en los próximos 12 meses. Con más de 100 conciertos programados, esta será la gira más ambiciosa en la historia de Rammstein.</p>
            <img src="img/merch2.avif" alt="Gira">
        </div>
        <div class="box">
            <h2>Especial Documental</h2>
            <p>Netflix estrenará un documental exclusivo sobre los 30 años de historia de Rammstein. Con footage inédito, entrevistas y detrás de cámaras que nunca antes fueron publicados.</p>
            <img src="img/merch3.avif" alt="Documental">
        </div>
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
                <img src="img/signo-menos.png" alt="Menos" style="width: 50px; height: auto; margin-top: 10px;">
                
            </div>
            <div class="box">
                <h2>Richard Z. Kruspe</h2>
                <p>Guitarra Principal</p>
                <p>Unido desde: 1994</p>
                <p>Berlín, Alemania</p>
                <img src="img/signo-menos.png" alt="Menos" style="width: 50px; height: auto; margin-top: 10px;">
            </div>
            <div class="box">
                <h2>Paul H. Landers</h2>
                <p>Guitarra Rítmica</p>
                <p>Unido desde: 1994</p>
                <p>Berlín, Alemania</p>
                <img src="img/signo-menos.png" alt="Menos" style="width: 50px; height: auto; margin-top: 10px;">
            </div>
            <div class="box">
                <h2>Oliver Riedel</h2>
                <p>Bajo</p>
                <p>Unido desde: 1994</p>
                <p>Berlín, Alemania</p>
                <img src="img/signo-menos.png" alt="Menos" style="width: 50px; height: auto; margin-top: 10px;">
            </div>
            <div class="box">
                <h2>Christoph Schneider</h2>
                <p>Batería</p>
                <p>Unido desde: 1994</p>
                <p>Berlín, Alemania</p>
                <img src="img/signo-menos.png" alt="Menos" style="width: 50px; height: auto; margin-top: 10px;">
            </div>
            <div class="box">
                <h2>Flake Lorenz</h2>
                <p>Teclados</p>
                <p>Unido desde: 1994</p>
                <p>Berlín, Alemania</p>
                <img src="img/signo-menos.png" alt="Menos" style="width: 50px; height: auto; margin-top: 10px;">
            </div>
    </div>
</body>
</html>