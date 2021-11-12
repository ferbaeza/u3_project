<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>U3_Project</title>
    <script type="text/javascript" src="../pages/js/order.js"></script>
</head>
<body>
<?php 
?>
<div class="user">
       <!-- <div class="shop_userCart">
            <h3><?php 
            echo "<span id='user'>Usuario: </span>".$_SESSION['user_loged']."<span id='user'> email: </span>";
            echo $_SESSION['mail_loged']."<span id='user'> phone: </span>"; 
            echo $_SESSION['phone_loged'];?></h3>
        </div>


    <div class="main_shop">-->
    <h1>Confirm Order</h1>
    <p id="nouser" style="display: none;">No user Info</p>
    <div class="userdetails">
        <div id="user-info"></div>        
    </div>
    <div class="tabla">
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
    </div>
        <p id="nocookies" style="display: none;">Shop Cart is Empty</p>
        <div id="purchase"><button class="purchase">Finalizar Compra</button></div>
    </div>

</body>
</html>