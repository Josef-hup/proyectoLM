<?php if (session_status() === PHP_SESSION_NONE && !headers_sent()) { session_start(); } ?>
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
    <link rel="stylesheet" href="css/galeria.css">
</head>
     <body>
    <?php require_once 'header.php'; ?>
       
        <main>
            <h1>Galería</h1>
            <div class="container">
                <div class="album_foto">
                    <h2>Gallery - Studio La Fabrique 2018</h2>
                    <div class="box_foto">
                        <div class="foto">
                            <img src="img/galeria1.jpg" alt="foto1">
                        </div>
                        <div class="foto">
                            <img src="img/galeria2.jpg" alt="foto2">
                        </div>
                        <div class="foto">
                            <img src="img/galeria3.jpg" alt="foto3">
                        </div>
                        <div class="foto">
                            <img src="img/galeria4.jpg" alt="foto4">
                        </div>
                    <div class="box_foto">
                        <div class="foto">
                            <img src="img/galeria5.jpg" alt="foto5">
                        </div>
                        <div class="foto">
                            <img src="img/galeria6.jpg" alt="foto6">
                        </div>
                        <div class="foto">
                            <img src="img/galeria7.jpg" alt="foto7">
                        </div>
                        <div class="foto">
                            <img src="img/galeria8.jpg" alt="foto8">
                        </div>
                    </div>
                </div>
                <div class="album_foto">
                    <h2>Gallery - ZOO Magazin</h2>
                    <div class="box_foto">
                        <div class="foto">
                            <img src="img/galeria9.jpg" alt="foto1">
                        </div>
                        <div class="foto">
                            <img src="img/galeria10.jpg" alt="foto2">
                        </div>
                        <div class="foto">
                            <img src="img/galeria11.jpg" alt="foto3">
                        </div>
                        <div class="foto">
                            <img src="img/galeria12.jpg" alt="foto4">
                        </div>
                    </div>
                    <div class="box_foto">
                        <div class="foto">
                            <img src="img/galeria13.jpg" alt="foto5">
                        </div>
                        <div class="foto">
                            <img src="img/galeria14.jpg" alt="foto6">
                        </div>
                        <div class="foto">
                            <img src="img/galeria15.jpg" alt="foto7">
                        </div>
                        <div class="foto">
                            <img src="img/galeria16.jpg" alt="foto8">
                        </div>
                    </div>
                </div>
                <div class="track_section">
                    <h2>Canción Más Popular de Rammstein</h2>
                    <div class="track_container">
                        <iframe width="800" height="450" src="https://www.youtube.com/embed/StZcUAPRRac?enablejsapi=1" 
                        title="Rammstein - Sonne (Official Video)" frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        allowfullscreen></iframe>
                        <p class="track_description">"Sonne" - El himno más icónico de Rammstein con más de 300 millones de reproducciones</p>
                    </div>
             </div>
        </main>
    </body>
</html>