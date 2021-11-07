<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>U3_Project</title>
    <link href="../../css/header.css" rel="stylesheet" type="text/css">
    <link href="../../css/consolas.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="../js/loadGames.js"></script>
    <link href="../../css/toast.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="../js/cookies.js"></script>
    <!--<script type="text/javascript" src="../shop_cart/shop_cart.js"></script>-->
</head>
<body>
    <?php include_once "../../pages/header_footer/main_header.php"?>
    <div class="main">    
        <div class="supernes">
            <h1>Games</h1>
            <p></p>
            
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Imagen</th>
                    <th>Year</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th> 🛒</th>
                </tr>
            </thead>
            <tbody id="tbody-container"></tbody>
        </table>
        <div id="snackbar">Game add it correctly</div>

        <br>
        <a href="../shop_cart/shopCart.php" role="button" class="btn btn-primary btn-sm">go to shopCart</a>


    </div>


</body>
</html>