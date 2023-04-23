<nav class="navbar">
    <figure class="navbar__bximg">
        <img src="./public/img/logo.png" alt="logo">
    </figure>
    <ul class="navbar__ulist">
        <li><a href="#">Inicio <i class="fa-solid fa-house"></i></a></li>
        <li><a href="#">Tienda <i class="fa-solid fa-cart-shopping"></i></a></li>
        <li><a href="#">Guias <i class="fa-solid fa-magnifying-glass"></i></a></li>
        <li><a href="#">Discord <i class="fa-brands fa-discord"></i></a></li>
        <li><a href="#">Soaporte <i class="fa-solid fa-phone"></i></a></li>
        <li><a href="#">Mapa <i class="fa-solid fa-map-location-dot"></i></a></li>
    </ul>
    <a href="./public/views/login.php">
        <?php
            if (false/**$user_loggin**/) {
                echo 'Usuario <i class="fa-solid fa-right-from-bracket"></i>';
            } else {
                echo 'Iniciar Sesión <i class="fa-solid fa-right-to-bracket"></i>';
            }
        ?>
    </a>
</nav>