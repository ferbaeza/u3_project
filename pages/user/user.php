<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>U3_Project</title>
    <link href="../../css/style.css" rel="stylesheet" type="text/css">
    <link href="../../css/header.css" rel="stylesheet" type="text/css">
    <link href="../../css/consolas.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="../js/userOrders.js"></script>

</head>
<body>
<?php
include_once "../utils/sesion.php";
include_once "../../pages/header_footer/main_header.php";
?>
<div class="user">
    <div class="main_user">
        <div class="logo">
            <img id="logo" src="https://tse4.mm.bing.net/th?id=OIP.xo-BCC1ZKFpLL65D93eHcgHaGe&pid=Api&P=0&w=183&h=161">
        </div>
        <div class="user_id"><h1>Usuario <?php echo $id ?></h1></div>
        <div class="user_id"><h1><?php echo $_SESSION['user_loged'] ?></h1></div>
        <div class="user_id"><h1><?php echo $_SESSION['hora_conexion'] ?></h1></div>
        <div class="user_id"><h1><?php echo $_SESSION['mail_loged'] ?></h1></div>
        <div class="user_id"><h1><?php echo $_SESSION['phone_loged'] ?></h1></div>

    </div>
    <div class="main_user">
        <div class="pedidos">
            <h1>User: <?php echo $_SESSION['user_loged'].' # '.$id ?></h1>
            <h3 id="nonorders" style="display: block;">No Orders already!</h3>

        </div>
        <div class="tabla" style="display: none" id="tablaorders">
        <table class="table_orders">
            <thead class="list_orders">
                <tr>
                    <th># Order </th>
                    <th> Date Order </th>
                    <th>Total Price</th>
                </tr>
            </thead>
            <tbody id="order"></tbody>
        </table>


    </div>
</div>
</body>
</html>