<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>U3_Project</title>
    <script type="text/javascript" src="../js/order.js"></script>
</head>
<body>

<?php include_once "../utils/sesion.php";?>
<div class="user">
       <div class="shop_userCart">
            <h3><?php 
            echo "<span id='user'>Usuario: </span>".$_SESSION['user_loged']."<span id='user'> email: </span>";
            echo $_SESSION['mail_loged']."<span id='user'> phone: </span>"; 
            echo $_SESSION['phone_loged'];?></h3>
        </div>
<?php
$a = file_get_contents()

?>



    <div class="main_shop">
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
    </div>

</body>
</html>