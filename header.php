<?php
if (session_status() === PHP_SESSION_NONE && !headers_sent()) {
    session_start();
}
?>
<header>
    <script src="js/jquery-4.0.0.min.js"></script>
    <script src="js/index.js"></script>
    <script src="js/raton.js"></script>
    <div class="nav">
    <img src="img/descarga (1).png" alt="logo ramstain" class="logo">
    <div class="menu">
        <h1 id="mainTitle">RAMMSTEIN</h1>
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
                                  <?php
                        if (!empty($_SESSION['login']) || !empty($_COOKIE['login'])) {
                            $user = isset($_SESSION['usuario']) ;
                            echo '
                            <a href="gira.php">Gira completa</a>
                             <a href="galeria.php">Galeria</a>
                             <a href="entradas.php">Compra de entradas</a>
                                <a href="allNews.php">All news</a>
                                 <a href="user.php">add news</a>
                            
                            
                            ';
                        } else {
                            echo '
                            <a href="#">Gira completa</a>
                            <a href="#">Galeria</a>
                            <a href="#">Compra de entradas</a>
                            <a href="#">All news</a>
                            <a href="#">add news</a>
                            
                            
                            
                            ';
                        }
                    ?>
                
                </div>
            </li>
        </ul>
         <?php
                        if (!empty($_SESSION['login']) || !empty($_COOKIE['login'])) {
                            $user = isset($_SESSION['usuario']) ;
                            echo '
                        <ul class="nav_links">
                            <li><a href="https://www.reddit.com/r/Rammstein/" target="_blank">Miembros</a></li>
                        </ul>
                        <ul class="nav_links">
                            <li><a href="discografia.php" target="_blank">Discografia</a></li>
                        </ul>
                            ';
                        } else {
                            echo '
                            
                            <ul class="nav_links">
                            <li><a href="#" >Miembros</a></li>
                        </ul>
                        <ul class="nav_links">
                            <li><a href="#">Discografia</a></li>
                        </ul>
                            
                            ';
                        }
                    ?>


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