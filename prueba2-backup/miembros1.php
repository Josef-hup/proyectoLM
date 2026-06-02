
<?php session_start(); ?>
<?php
    if (!empty($_SESSION['login']) || !empty($_COOKIE['login'])) {
        $user = isset($_SESSION['usuario']) ;
    require_once 'header.php'; 
       echo'
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
    
   

    <main>
        <h1>Formulario de Registro de Miembros</h1>
        
        <div class="form_container">
            <form class="miembros_form" method="POST" action="proceso_miembros.php">
                <div class="campo">
                    <label>nombre:</label>
                    <input type="text" name="nombre" placeholder="nombre" required>
                </div>

                <div class="campo">
                    <label>instrumento:</label>
                    <input type="text" name="instrumento" placeholder="instrumento" required>
                </div>

                <div class="campo">
                    <label>fecha de nacimiento:</label>
                    <input type="date" name="fecha" placeholder="echa de nacimiento" required>
                </div>

                <div class="campo">
                    <label>ciudad:</label>
                    <input type="text" name="ciudad" placeholder="Ciudad" required>
                </div>
                <button type="text" class="boton_enviar">Registrate</button>
            </form>
        </div>
    </main>
</body>
</html>';
    } else {
        header("Location: index.php");
    }
?>

