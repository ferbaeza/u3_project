<?php
require_once "../bbdd/conexion.php";

session_start();
$username = $_SESSION['user_loged'];
$upass= $_SESSION['passwd_loged'];
$umail = $_SESSION['mail_loged'];
$uphone = $_SESSION['phone_loged'];

echo($username);
echo($upass);
echo($umail);
echo($uphone);




    echo '<div class="top_nav">
        <nav class="nav_uno">
            <ul>
                <li class="bot_nav"><a href="../../pages/consolas/main.php">Main</a></li>
                <li class="login" id="user_loged">'.$username.'</li>
                <li class="login"><a href="../../index.php">Logout</a></li>
                <li class="carrito"><a href="../../pages/shop_cart/shopCart.php">ShopCart 🛒</a></li>
            </ul>
                
        </nav>
    </div>';

?>