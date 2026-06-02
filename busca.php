<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busca - Rammstein</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/no-flicker.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=BBH+Sans+Bartle&family=BBH+Sans+Bogle&family=Bitcount+Grid+Double:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/busca.css">
</head>
<body>
    <?php require_once 'header.php'; ?>

    <main class="busca-main">
        <section class="busca-panel">
            <h1>Noticias AJAX</h1>
            <div class="busca-grid">
                <label class="field-label">
                    Número de noticias (1-5)
                    <input id="newsCount" type="number" min="1" max="5" placeholder="Escribe un número" />
                </label>

                <label class="checkbox-label">
                    <input id="orderCheckbox" type="checkbox" />
                    Orden ascendente por fecha
                </label>

                <button id="loadButton" type="button" class="boton_enviar">Cargar noticias</button>

                <p id="buscaError" class="error-text" aria-live="polite"></p>
            </div>
        </section>

        <section class="busca_resultados">
            <h2>Resultados</h2>
            <div id="resultList" class="result-list">
                <p class="empty-note">Introduce un número y pulsa «Cargar noticias».</p>
            </div>
        </section>
    </main>

    <script src="js/busca.js"></script>
</body>
</html>