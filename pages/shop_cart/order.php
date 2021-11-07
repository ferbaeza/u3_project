<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>U3_Project</title>
    <link href="../../css/header.css" rel="stylesheet" type="text/css">
    <link href="../../css/consolas.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="../js/order.js"></script>
</head>
<body>
<?php include_once "../utils/sesion.php";
   
    include_once "../../pages/header_footer/main_header.php"?>
    <div class="main">
    <h1>Confirm Order</h1>
    <p id="nouser" style="display: none;">No user Info</p>
    <div class="userdetails">
        <div id="user-info"></div>        
    </div>

        <table class="table_shopCart">
            <thead class="list_shop">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Cantidad</th>
                    <th>Price</th>
                    <th>Total Price</th>
                </tr>
            </thead>
            <tbody id="tbody-container"></tbody>
        </table>

        <p id="nocookies" style="display: none;">Shop Cart is Empty</p>
        <div id="purchase"><button class="purchase">Finalizar Compra</button></div>
    </div>

</body>
</html>