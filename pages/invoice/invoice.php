<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>U3_Project</title>
        <link href="../../css/invoice.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="../js/invoice.js"></script>
    </head>
    <body>
        <?php
        include_once "../utils/sesion.php";
        ?>


        <div class="main">

            <div class="logo"></div>

            <h1 class="titulo">INVOICE</h1>



            <div class="datos">
                <p><b>Company: </b>Classic Arcade Games S.L<br>
                <b>Email: </b>ClassicArcadeGames@hotmial.com<br>
                <b>Direction: </b> C/ Alicante, N3, Villena (Alicante><br>
                <b>Postal Code: </b>03400</p>

            </div>

            <div class="invoice">
                <h3><?php 
                echo '<h3>Cliente: </h3>';
                echo "<span id='user'></span>".$_SESSION['user_loged']."<span id='user'></span><br>";
                echo $_SESSION['mail_loged']."<span id='user'></span>"; 
                echo $_SESSION['phone_loged'];?></h3>
            </div><br>

            <table class="table">
                <thead class="list">
                        <tr>
                            <th>Number Invoice</th>
                            <th>Game Name</th>
                            <th>Cantidad</th>
                            <th>Price</th>
                            <th>Total Price</th>
                        </tr>
                </thead>
                <tbody id="tbody-container"></tbody>
            </table>



            <div class="total"><h2>TOTAL INVOICE: </h2></div>
            <div class="policy">
            <p><b>Return Policy: </b>You have 15 days to test all our products in case of malfunction we will refund your money</p>
            </div>
            <div class="fired">
            <h2>Thanks for you purchase</h2>
            <h3>We hope to see you again soon</h3>
            </div>
            <div"><a href="../login/login.php"><button class="terminar">Terminar</button></a></div>
        </div>

    </body>
</html>