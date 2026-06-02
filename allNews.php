<?php session_start(); ?>
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
    <link rel="stylesheet" href="css/allNews.css">
<<<<<<< HEAD
    <style>
    /* Temporary overrides to ensure visible changes during testing */
    body { padding-right: 30px !important; }
    .news-container { padding-right: 30px !important; }
    .box { border: 2px solid #fff !important; padding: 14px !important; background: rgba(0,0,0,0.35) !important; }
    </style>
=======
>>>>>>> 0b6c7400e42114a0e7d031e1f98ad78eed3d41dc
</head>
<body>
    
    <?php require_once 'header.php'; ?>
    
    <div class="news-container">
            <?php 
                require_once 'conecct.php';
                $sql = "SELECT * FROM news ORDER BY id DESC";
                $query = $pdo->prepare($sql);
                $query->execute();
                $newss = $query->fetchAll(PDO::FETCH_OBJ);
                foreach($newss as $element)
                {
                    $title = htmlspecialchars($element->title, ENT_QUOTES, 'UTF-8');
                    $lorem = htmlspecialchars($element->lorem, ENT_QUOTES, 'UTF-8');
                    $compleat = htmlspecialchars($element->compleat_text, ENT_QUOTES, 'UTF-8');
                    $image = htmlspecialchars($element->image, ENT_QUOTES, 'UTF-8');
                    echo '<div class="box">
                            <h2>'.$title.'</h2>
                            <p>'.$lorem.'</p>
                            <p>'.$compleat.'</p>
                            <img src="img/'.$image.'" alt="">
                        </div>';
                }
            ?>"
    </div>
</body>
</html>