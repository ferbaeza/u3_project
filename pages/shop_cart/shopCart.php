<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>U3_Project</title>
    <link href="../../css/header.css" rel="stylesheet" type="text/css">
    <link href="../../css/consolas.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="../js/shop_cart.js"></script>
</head>
<body>
    <?php include_once "../../pages/header_footer/main_header.php"?>
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
                </tr>
            </thead>
            <tbody id="tbody-container"></tbody>
        </table>

        <p id="no-addShopCart-message" style="display: none;">Shop Cart is Empty</p>

    </div>

</body>
</html>