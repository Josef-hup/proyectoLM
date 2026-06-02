<?php if (session_status() === PHP_SESSION_NONE && !headers_sent()) { session_start(); } ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=BBH+Sans+Bartle&family=BBH+Sans+Bogle&family=Bitcount+Grid+Double:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/discografia.css">
    <link rel="stylesheet" href="css/merch.css">
    </head>
         <body background="img/bg.jpg">
        
         <?php require_once 'header.php'; ?>
        <body1>

            <div class="merch_container">
                <div class="merch_item">
                    <div class="img_item">
                        <img src="img/merch1.avif" alt="Merch 1">
                    </div>
                    <h3>Camiseta Rammstein</h3>
                    <p>Precio: $25.00</p>
                </div>
                <div class="merch_item">
                    <div class="img_item">
                        <img src="img/merch2.avif" alt="Merch 2">
                    </div>
                    <h3>Sudadera Rammstein</h3>
                    <p>Precio: $50.00</p>
                </div>
                <div class="merch_item">
                    <div class="img_item">
                        <img src="img/merch3.avif" alt="Merch 3">
                    </div>
                    <h3>Camisa Rammstein</h3>
                    <p>Precio: $20.00</p>
                </div>
                <div class="merch_item">
                    <div class="img_item">
                        <img src="img/merch4.avif" alt="Merch 4">
                    </div>
                    <h3>Camiseta</h3>
                    <p>Precio: $20.00</p>
                </div>
                <div class="merch_item">
                    <div class="img_item">
                        <img src="img/merch5.avif" alt="Merch 5">
                    </div>
                    <h3>Shorts Rammstein</h3>
                    <p>Precio: $20.00</p>
                </div>
            </div>
        </body1>
    </body>
</html>