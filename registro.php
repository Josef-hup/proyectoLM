<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - Rammstein</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=BBH+Sans+Bartle&family=BBH+Sans+Bogle&family=Bitcount+Grid+Double:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/registro.css">
</head>
<body background="img/bg.jpg">
    
    <?php require_once 'header.php'; ?>

    <main>
        <h1>Formulario de Registro</h1>
        <div id="infoweb">
    <div class="form_container">
            <form class="registro_form" method="POST" action="procesar_registro.php">
                <div class="campo">
                    <label>login:</label>
                    <input type="text" name="login" placeholder="username" >
                </div>

                <div class="campo" id="campos_nombre_email">
                    <div class="campo">
                        <label>nombre:</label>
                        <input type="text" name="nombre" placeholder="Tu nombre">  
                    </div>

                    <div class="campo">
                        <label>Email:</label>
                        <input type="text" name="email" placeholder="tu@email.com" >
                    </div>
                </div>

                <div class="campo" id="campos_apellidos" style="display:none;">
                    <div class="campo">
                        <label>Apellido 1:</label>
                        <input type="text" name="apellido1" placeholder="Tu primer apellido">
                    </div>

                    <div class="campo">
                        <label>Apellido 2:</label>
                        <input type="text" name="apellido2" placeholder="Tu segundo apellido">
                    </div>
                </div>

                <button type="button" class="boton_siguiente" style="font-size: 16px; padding: 10px 20px; width: 100%; cursor: pointer;">Siguiente</button>
                <button type="submit" class="boton_enviar">Registrarse</button>
            </form>
        </div>
        </div>
        
    </main>
    <script src="js/jquery-4.0.0.min.js"></script>
    <script src="js/registro.js"></script>
</body>
</html>