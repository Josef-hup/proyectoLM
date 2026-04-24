<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autorizacion</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=BBH+Sans+Bartle&family=BBH+Sans+Bogle&family=Bitcount+Grid+Double:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/registro.css">
</head>
<body background="img/bg.jpg">
    
    <?php require_once 'header.php'; ?>

    <main>
        <h1>Formulario de Autorizacion</h1>
        
        <div class="form_container">
            <form class="Autorizacion_form" method="POST" action="procesar_Autorizacion.php">
                <div class="campo">
                    <label>login:</label>
                    <input type="text" name="login" placeholder="username" required>
                </div>
                <div class="campo">
                    <label>Contraseña:</label>
                    <input type="password" name="password" placeholder="Tu contraseña" required>
                </div>
                <button type="submit" class="boton_enviar">Autorizacion</button>
            </form>
        </div>
    </main>
</body>
</html>