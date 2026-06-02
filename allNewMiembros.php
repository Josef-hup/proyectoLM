<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Miembros</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/no-flicker.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=BBH+Sans+Bartle&family=BBH+Sans+Bogle&family=Bitcount+Grid+Double:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/allNewMiembros.css">
</head>
<body>
    <?php require_once 'header.php'; ?>
    <main>
        <h1>Miembros</h1>
        <div class="news-container">
            <?php
                require_once 'conecct.php';
                $sql = "SELECT * FROM miembros ORDER BY id DESC";
                $query = $pdo->prepare($sql);
                $query->execute();
                $members = $query->fetchAll(PDO::FETCH_ASSOC);

                if (empty($members)) {
                    echo '<div class="box"><p>No hay miembros registrados.</p></div>';
                } else {
                    foreach ($members as $member) {
                        $nombre = htmlspecialchars($member['nombre'], ENT_QUOTES, 'UTF-8');
                        $instrumento = htmlspecialchars($member['instrumento'], ENT_QUOTES, 'UTF-8');
                        $fecha = htmlspecialchars($member['fecha'], ENT_QUOTES, 'UTF-8');
                        $ciudad = htmlspecialchars($member['ciudad'], ENT_QUOTES, 'UTF-8');
                        echo '<div class="box">'
                            . '<h2>' . $nombre . '</h2>'
                            . '<p>Instrumento: ' . $instrumento . '</p>'
                            . '<p>Fecha de nacimiento: ' . $fecha . '</p>'
                            . '<p>Ciudad: ' . $ciudad . '</p>'
                            . '</div>';
                    }
                }
            ?>
        </div>
    </main>
</body>
</html>
