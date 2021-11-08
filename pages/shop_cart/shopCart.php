<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>U3_Project</title>
    <link href="../../css/header.css" rel="stylesheet" type="text/css">
    <link href="../../css/consolas.css" rel="stylesheet" type="text/css">
    <link href="../../css/toast.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="../js/shop_cart.js"></script>
    <script type="text/javascript" src="../js/cookies.js"></script>
</head>
<body>  
    <?php include_once "../utils/sesion.php";

    include_once "../../pages/header_footer/main_header.php"?>
    <div class="main">
    <h1>Shoping Cart</h1>

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

        <p id="nocookies" style="display: none;">Shop Cart is Empty</p>
        <div id="purchase" href="./order.php"><a href="./order.php"><button class="purchase">Realizar Compra</button></a></div>
    </div>
    <div id="snackbar">Game add it correctly</div>

</body>
</html>