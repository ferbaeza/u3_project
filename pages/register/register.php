<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>U3_Project</title>
    <link href="../../css/header.css" rel="stylesheet" type="text/css">
    <link href="../../css/login.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="register.js"></script>
</head>
<body>
    <?php include_once "../../pages/header_footer/register_header.php"?>
    <div class="login_form">
        <h2>Thanks to join us!</h2>
        <form class="formulario" onsubmit="return doRegister()" method="POST">
        <input id="name" name="name" placeholder="Username"/><br>
        <input id="pass" name="pass" placeholder="Password"/><br>
        <button id="btn-log" type="submit" name="submit">Submit</button><br>
            
        <p id="registro" style="display: none;">Registrado correctamente correcto!</p>
        <p id="noregistro" style="display: none;">¡Error! Su usuario ya esta registrado</p>


        </form>
    </div>



</body>
</html>