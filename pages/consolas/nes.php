<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>U3_Project</title>
    <link href="../../css/header.css" rel="stylesheet" type="text/css">
    <link href="../../css/consolas.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="login.js"></script>
</head>
<body>
    <?php include_once "../../pages/header_footer/main_header.php"?>
    <div class="main">    
        <h1>Nintendo</h1>


<?php
    require_once "../bbdd/conexion.php";

/*
    $con_nes = $bd->prepare("SELECT * FROM game WHERE game.id_console=1; ");
    $con_nes->execute();
    $results = $con_nes->fetchAll(PDO::FETCH_ASSOC);
    $json_nes = json_encode($results);
    $j_nes = json_decode($json_nes);
    while ($row = $j_nesj->fetch()) {
        print_r($row);
    }    
*/
?>


    </div>


</body>
</html>