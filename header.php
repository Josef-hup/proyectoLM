<?php
if (session_status() === PHP_SESSION_NONE && !headers_sent()) {
    session_start();
}
?>
<header>
    <script src="/proyectoLM/js/jquery-4.0.0.min.js"></script>
    <script src="/proyectoLM/js/index.js"></script>
    <script src="/proyectoLM/js/raton.js"></script>
    <div class="nav">
    <img src="/proyectoLM/img/descarga (1).png" alt="logo ramstain" class="logo">
    <div class="menu">
        <h1 id="mainTitle">RAMMSTEIN</h1>
    </div>
    </div>
    <div class="navigator">
        <ul class="nav_links">
            <li>
                <a href="/proyectoLM/index.php">Inicio</a>
            </li>
        </ul>
        <ul class="nav_links">
            <li>
                <a href="/proyectoLM/">Gira</a>
  
                <div class="submenu">
                                  <?php
                        if (!empty($_SESSION['login']) || !empty($_COOKIE['login'])) {
                            $user = isset($_SESSION['usuario']) ;
                            echo '
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
                            <li><a href="/proyectoLM/allNewMiembros.php">Miembros</a></li>
                        </ul>
                        <ul class="nav_links">
                            <li><a href="/proyectoLM/discografia.php">Discografia</a></li>
                        </ul>
                            ';
                        } else {
                            echo '
                            
                            <ul class="nav_links">
                            <li><a href="/proyectoLM/allNewMiembros.php">Miembros</a></li>
                        </ul>
                        <ul class="nav_links">
                            <li><a href="/proyectoLM/discografia.php">Discografia</a></li>
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
                            echo '<a href="/proyectoLM/merch.php">Merchandising</a>';
                            echo '<a href="/proyectoLM/discos.php">Discos</a>';
                            echo '<a href="/proyectoLM/miembros1.php">Miembros</a>';
                        echo '</div>';
                        
                    } else {
                        echo '<div class="submenu">';
                            echo '<a href="/proyectoLM/aut.php">Autorizacion</a>';
                        echo '</div>';
                    }
                ?> 
            </li>
        </ul>
    </div>
</header>