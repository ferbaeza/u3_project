<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>U3_Project</title>
    <link href="../../css/header.css" rel="stylesheet" type="text/css">
    <link href="../../css/consolas.css" rel="stylesheet" type="text/css">
    <link href="../../css/toast.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="../js/shop_cart.js"></script>
    <script type="text/javascript" src="../js/logout.js"></script>
</head>
<body>  
    <?php include_once "../utils/sesion.php";

    include_once "../../pages/header_footer/main_header.php"?>
    <div class="user">
        <!--<div class="shop_userCart">
            <h3><?php 
            echo "<span id='user'>Usuario: </span>".$_SESSION['user_loged']."<span id='user'> email: </span>";
            echo $_SESSION['mail_loged']."<span id='user'> phone: </span>"; 
            echo $_SESSION['phone_loged'];?></h3>
        </div>-->

    </div>
    <div class="main_shop">
    <h1>Shoping Cart</h1>
        <div class="tabla">
        <table class="table_shopCart">
            <thead class="list_shop">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Cantidad</th>
                    <th>Price</th>
                    <th>Total Price</th>
                    <th>Modify</th>
                    <th>Remove</th>
                </tr>
            </thead>
            <tbody id="tbody-container"></tbody>
        </table>
        </div>
        <p id="nocookies" style="display: none;">Shop Cart is Empty</p>
        <div id="purchase"><a href="./order.php"><button class="purchase">Realizar Compra</button></a></div>
    </div>
    <div id="snackbar">Game add it correctly</div>
    <div id="snackbaraddone">You add it one more game</div>
    <div id="snackbaremove">Remove it!</div>
    <div id="snackbarless">You remove one unit of this game</div>

</body>
</html>