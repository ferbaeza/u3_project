<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>U3_Project</title>
    <link href="../../css/header.css" rel="stylesheet" type="text/css">
    <link href="../../css/consolas.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php include_once "../../pages/header_footer/main_header.php"?>
    <div class="main">    
        <div class="nes">
            <h1>Nintendo</h1>
            <p>Los mejores juegos de Nintendo</p>

        <!--<button type="button" class="snes_refresh" onclick="loadFilms()">
            Refrescar
        </button>-->
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Year</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>🛒</th>
                </tr>
            </thead>
            <tbody id="tbody-container"></tbody>
        </table>


    </div>
    </div>


</body>
</html>