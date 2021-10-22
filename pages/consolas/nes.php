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


    $con_nes = $bd->prepare("SELECT * FROM game WHERE game.id_console=1; ");
    $con_nes->execute();
    //$results = $con_nes->fetchAll();

    echo '<div class="nes">';
    echo '<h2>Videojuegos disponibles</h2>';

    foreach($con_nes as $row){
        echo "<div id='game' class=".$row['id_game'].">" ;
        echo $row['name']."". $row['year']."<button id=".$row['id_game']." name=''>Anadir</button><br>";
        
        
        echo "</div>";



        
    }

    $results = $con_nes->fetchAll(PDO::FETCH_ASSOC);




?>


    </div>


</body>
</html>