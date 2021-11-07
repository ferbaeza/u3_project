<?php
require_once "../bbdd/conexion.php";

$username = $_SESSION['user_loged'];




    echo '<div class="top_nav">
        <nav class="nav_uno">
            <ul>
                <li class="bot_nav"><a href="../../pages/consolas/main.php">Main</a></li>
                <li class="login"><button id="logout" onclick=doLogout()>Logout</button></li>
                <li class="carrito"><a href="../../pages/shop_cart/shopCart.php">ShopCart 🛒</a></li>
                <li class="login" id="user_loged">'.$username.'</li>
            </ul>
                
        </nav>
    </div>';

?>