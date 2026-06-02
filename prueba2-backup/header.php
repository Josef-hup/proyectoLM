<?php
if (session_status() === PHP_SESSION_NONE && !headers_sent()) {
    session_start();
}
?>
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
                <a href="index.php">Inicio</a>
            </li>
        </ul>
        <ul class="nav_links">
            <li>
                <a href="">Gira</a>
                <div class="submenu">
                    <a href="gira.php">Gira completa</a>
                    <a href="galeria.php">Galeria</a>
                    <a href="entradas.php">Compra de entradas</a>
                    <a href="allNews.php">All news</a>
                    <a href="user.php">home</a>
                
                </div>
            </li>
        </ul>
        <ul class="nav_links">
            <li><a href="https://www.reddit.com/r/Rammstein/" target="_blank">Miembros</a></li>
        </ul>
        <ul class="nav_links">
            <li><a href="discografia.php" target="_blank">Discografia</a></li>
        </ul>
       <ul class="nav_links">
                <li>
                    <?php
                        if (!empty($_SESSION['login']) || !empty($_COOKIE['login'])) {
                            $user = isset($_SESSION['usuario']) ;
                            echo '<a href="logout.php">Cerrar Sesión</a>';
                        } else {
                            echo '<a href="registro.php">Registro</a> / <a href="aut.php">Autorización</a>';
                        }
                    ?>
                </li>
            </ul>
        <ul class="nav_links">
            <li>
                <a href="">Tienda</a>
                <?php
                     if (!empty($_SESSION['login']) || !empty($_COOKIE['login'])) {
                        $user = isset($_SESSION['usuario']) ;
                        echo '<div class="submenu">';
                            echo '<a href="merch.php">Merchandising</a>';
                            echo '<a href="discos.php">Discos</a>';
                            echo '<a href="miembros1.php">Miembros</a>';
                        echo '</div>';
                        
                    } else {
                        echo '<div class="submenu">';
                            echo '<a href="aut.php">Autorizacion</a>';
                        echo '</div>';
                    }
                ?> 
            </li>
        </ul>
    </div>
</header>