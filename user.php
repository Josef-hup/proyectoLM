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
        <h1>Usuario autorizado</h1>
        
        <h2><?php echo $_COOKIE['login']; ?></h2>
        <div class="form_container">
            <form class="registro_form" method="POST" action="addNew.php" enctype="multipart/form-data">

                <div class="campo">
                    <label>Titulo</label>
                    <input type="text" name="title" placeholder="Titulo" required>
                </div>

                <div class="campo">
                    <label>Description corto </label>
                    <input type="text" name="compleat_text" placeholder="Description" required>
                </div>

                <div class="campo">
                    <label>lorem</label>
                    <input type="text" name="lorem" placeholder="lorem" required>
                </div>

                <div class="campo">
                    <label>imagen</label>
                    <input type="file" name="image" required>
                </div>
                <button type="submit" class="boton_enviar">anadir </button>
            </form>
        </div>

    </main>
</body>
</html>