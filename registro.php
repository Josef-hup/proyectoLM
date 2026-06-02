<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - Rammstein</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/no-flicker.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=BBH+Sans+Bartle&family=BBH+Sans+Bogle&family=Bitcount+Grid+Double:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/registro.css">
</head>
<body>
    
    <?php require_once 'header.php'; ?>

    <main>
        <h1>Formulario de Registro</h1>
        <div id="infoweb">
    <div class="form_container">
            <form class="registro_form" method="POST" action="procesar_registro.php">
                <div class="campo">
                    <label>login:</label>
                    <input type="text" name="login" placeholder="username" required autocomplete="username">
                </div>

                <div class="campo">
                    <label>Email:</label>
                    <input type="email" name="email" placeholder="tu@email.com" required autocomplete="email">
                </div>

                <div class="campo">
                    <label>Contraseña:</label>
                    <input type="password" name="password" placeholder="Escribe tu contraseña" required autocomplete="new-password">
                </div>

                <button type="submit" class="boton_enviar">Registrarse</button>
            </form>
        </div>
        </div>
        
    </main>
    <script src="js/jquery-4.0.0.min.js"></script>
    <script src="js/registro.js"></script>
</body>
</html>