<?php if (session_status() === PHP_SESSION_NONE && !headers_sent()) { session_start(); } ?>
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
    <link rel="stylesheet" href="css/discografia.css">
    <link rel="stylesheet" href="css/discos.css">
</head>
     <body>
        
        <header>
            <div class="nav">
                <img src="img/descarga (1).png" alt="logo ramstain" class="logo">
                <div class="menu">
                    <h1 id="mainTitle">RAMMSTEIN</h1>
                    <ul class="menu_links">
                        <li>
                            <a href="https://www.instagram.com/rammsteinofficial/" class="links" target="_blank">
                                <img src="img/instagram.png" alt="instagram" class="logo_linc" >
                            </a>
                            <a href="https://www.facebook.com/Rammstein" class="links" target="_blank">
                                <img src="img/twitter.png" alt="x" class="logo_linc">
                            </a>
                            <a href="https://www.facebook.com/Rammstein" class="links" target="_blank">
                                <img src="img/facebook.png" alt="facebook" class="logo_linc">
                            </a>
                            <a href="https://www.youtube.com/@RammsteinOfficial" class="links" target="_blank">
                                <img src="img/youtube.png" alt="youtube" class="logo_linc">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
             <div class="navigator">
                    <ul class="nav_links">
                        <li>
                            <a href="index.html">Inicio</a>
                        </li>
                    </ul>
                    <ul class="nav_links">
                        <li>
                            <a href="">Gira</a>
                            <div class="submenu">
                                <a href="gira.html">Gira completa</a>
                                <a href="galeria.html">Galeria</a>
                                <a href="entradas.html">Compra de entradas</a>
                            </div>
                        </li>
                    </ul>
                    <ul class="nav_links">
                        <li><a href="https://www.reddit.com/r/Rammstein/" target="_blank">Miembros</a></li>
                    </ul>
                    <ul class="nav_links">
                        <li><a href="discografia.html" target="_blank">Discografia</a></li>
                    </ul>
                    <ul class="nav_links">
                        <li>
                            <a href="registro.html">Registro</a>
                        </li>
                    </ul>
                    <ul class="nav_links">
                        <li>
                            <a href="">Tienda</a>
                            <div class="submenu">
                                <a href="merch.html">Merchandising</a>
                                <a href="discos.html">Discos</a>
                            </div>
                        </li>
                    </ul>
                </div>
        </header>
        
        <body>
            <table>
                <tr>
                    <th>Nombre</th>
                    <th>Año</th>
                    <th>Numero de canciones</th>
                    <th>Discografia</th>
                </tr>
                <tr>
                    <td>Herzeleid</td>
                    <td>1995</td>
                    <td>11</td>
                    <td><a href="https://www.discogs.com/es/master/7542-Rammstein-Herzeleid" target="_blank">Ver Discografia</a></td>
                </tr>
                <tr>
                    <td>Sehnsucht</td>
                    <td>1997</td>
                    <td>11</td>
                    <td><a href="https://www.discogs.com/es/master/7543-Rammstein-Sehnsucht" target="_blank">Ver Discografia</a></td>
                </tr>
                <tr>
                    <td>Mutter</td>
                    <td>2001</td>
                    <td>11</td>
                    <td><a href="https://www.discogs.com/es/master/7544-Rammstein-Mutter" target="_blank">Ver Discografia</a></td>
                </tr>
                <tr>
                    <td>Reise, Reise</td>
                    <td>2004</td>
                    <td>11</td>
                    <td><a href="https://www.discogs.com/es/master/7545-Rammstein-Reise-Reise" target="_blank">Ver Discografia</a></td>
            </table>
 
        </body>
    </body>
</html>
