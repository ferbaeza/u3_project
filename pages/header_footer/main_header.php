<?php
require_once "../bbdd/conexion.php";

$username = $_SESSION['user_loged'];




    echo '<div class="top_nav">
        <nav class="nav_uno">
            <ul>
                <li class="bot_nav"><a href="../../pages/consolas/main.php">Main</a></li>
                <li class="login" id="user_loged"><a href="../../index.php">Logout</a></li>
                <li class="carrito" id="user_loged"><a href="../../pages/shop_cart/shopCart.php">ShopCart 🛒</a></li>
                <li class="login" id="user_loged"><a href="../../pages/user/user.php">'.$username.'</a></li>
            </ul>
                
        </nav>
    </div>';

?>