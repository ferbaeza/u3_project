<?php
require_once "../bbdd/conexion.php";

session_start();
$username = $_SESSION['user_loged'];


    echo '<div class="top_nav">
        <nav class="nav_uno">
            <ul>
                <li class="bot_nav"><a href="../../pages/consolas/main.php">Main</a></li>
                <li class="bot_nav"><a href="../../pages/consolas/nes.php">Nes</a></li>
                <li class="bot_nav"><a href="../../pages/consolas/snes.php">SNes</a></li>
                <li class="bot_nav"><a href="../../pages/consolas/megadrive.php">Megadrive</a></li>
                <li class="bot_nav"><a href="../../pages/consolas/mastersystem.php">MasterSystem</a></li>
                <li class="login" id="user_loged">'.$username.'</li>
                <li class="login"><a href="../../pages/login/login.php">Logout</a></li>
                <li class="carrito"><a href="../../pages/shop_cart/online_cart.php">Carrito 🛒</a></li>
            </ul>
                
        </nav>
    </div>';

?>