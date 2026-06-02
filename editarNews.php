<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar noticia</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/no-flicker.css">
    <link rel="stylesheet" href="css/editNews.css">

</head>
<body>
    <?php require_once 'header.php'; ?>
    <main style="padding: 30px; color: white;">
        <h1 class="form-title">Editar noticia</h1>

        <div class="form-container">
            <div class="form-group">
                <div class="form-named">
                    <div class="border">imagen</div>
                    <div class="border">titulo</div>
                    <div class="border">Texto largo</div>
                    <div class="border">editar</div>
                    <div class="border">borrar</div>
                </div>

                <?php 
                require_once 'conecct.php';
                $sql = "SELECT * FROM news ORDER BY id DESC";
                $query = $pdo->prepare($sql);
                $query->execute();
                $newss = $query->fetchAll(PDO::FETCH_OBJ);

                foreach($newss as $element) {
                    $title = htmlspecialchars($element->title, ENT_QUOTES, 'UTF-8');
                    $lorem = htmlspecialchars($element->lorem, ENT_QUOTES, 'UTF-8');
                    $image = htmlspecialchars($element->image, ENT_QUOTES, 'UTF-8');
                    
                    // Каждая новость — это сетка (row) из 5 ячеек
                    echo '<div class="news-row">';
                        echo '<div class="border"><img src="img/'.$image.'" style="width:100px;"></div>'; // Картинка
                        echo '<div class="border"><h2>'.$title.'</h2></div>';                        // Заголовок
                        echo '<div class="border"><p>'.$lorem.'</p></div>';                          // Текст
                        echo '<a href="edit_form.php?id='.$element->id.'">⚙️</a>'; // Кнопка править
                        echo '<div class="border"><a href="delete.php?id='.$element->id.'">❌</a></div>'; // Кнопка удалить
                    echo '</div>';
                }
                ?>
            </div>




            <!-- Formulario de edición de noticia -->

        </div>
    </main>
</body>
</html>