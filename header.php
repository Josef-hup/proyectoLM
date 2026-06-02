<?php
if (session_status() === PHP_SESSION_NONE && !headers_sent()) {
    session_start();
}
?>
<header>
<<<<<<< HEAD
    <script src="/proyectoLM/js/jquery-4.0.0.min.js"></script>
    <script src="/proyectoLM/js/index.js"></script>
    <script src="/proyectoLM/js/raton.js"></script>
    <div class="nav">
    <img src="/proyectoLM/img/descarga (1).png" alt="logo ramstain" class="logo">
=======
    <script src="js/jquery-4.0.0.min.js"></script>
    <script src="js/index.js"></script>
    <script src="js/raton.js"></script>
    <div class="nav">
    <img src="img/descarga (1).png" alt="logo ramstain" class="logo">
>>>>>>> 0b6c7400e42114a0e7d031e1f98ad78eed3d41dc
    <div class="menu">
        <h1 id="mainTitle">RAMMSTEIN</h1>
    </div>
    </div>
    <div class="navigator">
        <ul class="nav_links">
            <li>
<<<<<<< HEAD
                <a href="/proyectoLM/index.php">Inicio</a>
=======
                <a href="index.php">Inicio</a>
>>>>>>> 0b6c7400e42114a0e7d031e1f98ad78eed3d41dc
            </li>
        </ul>
        <ul class="nav_links">
            <li>
<<<<<<< HEAD
                <a href="/proyectoLM/">Gira</a>
=======
                <a href="">Gira</a>
>>>>>>> 0b6c7400e42114a0e7d031e1f98ad78eed3d41dc
  
                <div class="submenu">
                                  <?php
                        if (!empty($_SESSION['login']) || !empty($_COOKIE['login'])) {
                            $user = isset($_SESSION['usuario']) ;
                            echo '
<<<<<<< HEAD
                            <a href="/proyectoLM/gira.php">Gira completa</a>
                             <a href="/proyectoLM/galeria.php">Galeria</a>
                             <a href="/proyectoLM/entradas.php">Compra de entradas</a>
                            <a href="/proyectoLM/allNews.php">All news</a>
                            <a href="/proyectoLM/user.php">add news</a>
                            <a href="/proyectoLM/editarNews.php">edit news</a>
                            <a href="/proyectoLM/busca.php">buscar noticia </a>
                            <a href="/proyectoLM/news_filter_apps/project1/index.php">Фильтр по датам</a>
                            <a href="/proyectoLM/news_filter_apps/project2/index.php">Фильтр по категориям</a>
                            ';
                        } else {
                            echo '
                            <a href="/proyectoLM/gira.php">Gira completa</a>
                            <a href="/proyectoLM/galeria.php">Galeria</a>
                            <a href="/proyectoLM/entradas.php">Compra de entradas</a>
                            <a href="/proyectoLM/allNews.php">All news</a>
                            <a href="/proyectoLM/aut.php">add news</a>
                            <a href="/proyectoLM/news_filter_apps/project1/index.php">Фильтр по датам</a>
                            <a href="/proyectoLM/news_filter_apps/project2/index.php">Фильтр по категориям</a>
=======
                            <a href="gira.php">Gira completa</a>
                             <a href="galeria.php">Galeria</a>
                             <a href="entradas.php">Compra de entradas</a>
                            <a href="allNews.php">All news</a>
                            <a href="user.php">add news</a>
                            <a href="editarNews.php">edit news</a>
                            
                            ';
                        } else {
                            echo '
                            <a href="gira.php">Gira completa</a>
                            <a href="galeria.php">Galeria</a>
                            <a href="entradas.php">Compra de entradas</a>
                            <a href="allNews.php">All news</a>
                            <a href="aut.php">add news</a>

                            
                            
                            
>>>>>>> 0b6c7400e42114a0e7d031e1f98ad78eed3d41dc
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
<<<<<<< HEAD
                            <li><a href="/proyectoLM/allNewMiembros.php">Miembros</a></li>
                        </ul>
                        <ul class="nav_links">
                            <li><a href="/proyectoLM/discografia.php">Discografia</a></li>
=======
                            <li><a href="allNewMiembros.php">Miembros</a></li>
                        </ul>
                        <ul class="nav_links">
                            <li><a href="discografia.php">Discografia</a></li>
>>>>>>> 0b6c7400e42114a0e7d031e1f98ad78eed3d41dc
                        </ul>
                            ';
                        } else {
                            echo '
                            
                            <ul class="nav_links">
<<<<<<< HEAD
                            <li><a href="/proyectoLM/allNewMiembros.php">Miembros</a></li>
                        </ul>
                        <ul class="nav_links">
                            <li><a href="/proyectoLM/discografia.php">Discografia</a></li>
                        </ul>
=======
                            <li><a href="allNewMiembros.php">Miembros</a></li>
                        </ul>
                        <ul class="nav_links">
                            <li><a href="discografia.php">Discografia</a></li>
                        </ul>
                            
>>>>>>> 0b6c7400e42114a0e7d031e1f98ad78eed3d41dc
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
<<<<<<< HEAD
                            echo '<div class="submenu">';
                            echo '<a href="/proyectoLM/merch.php">Merchandising</a>';
                            echo '<a href="/proyectoLM/discos.php">Discos</a>';
                            echo '<a href="/proyectoLM/miembros1.php">Miembros</a>';
=======
                        echo '<div class="submenu">';
                            echo '<a href="merch.php">Merchandising</a>';
                            echo '<a href="discos.php">Discos</a>';
                            echo '<a href="miembros1.php">Miembros</a>';
>>>>>>> 0b6c7400e42114a0e7d031e1f98ad78eed3d41dc
                        echo '</div>';
                        
                    } else {
                        echo '<div class="submenu">';
<<<<<<< HEAD
                            echo '<a href="/proyectoLM/aut.php">Autorizacion</a>';
=======
                            echo '<a href="aut.php">Autorizacion</a>';
>>>>>>> 0b6c7400e42114a0e7d031e1f98ad78eed3d41dc
                        echo '</div>';
                    }
                ?> 
            </li>
        </ul>
    </div>
</header>