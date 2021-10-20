<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>U3_Project</title>
    <link href="../../css/header.css" rel="stylesheet" type="text/css">
    <link href="../../css/login.css" rel="stylesheet" type="text/css">
    <link href="../../css/index.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="./login.js"></script>
</head>
<body>
    <?php include_once "../header_footer/login_header.php"?>
    <div class="login_form">
        <h2>Start with your user and password</h2>
        <form class="formulario" onsubmit="return doLogin()" method="POST">
            <input id="name" name="name">
            <input id="pass" name="pass">
            <button type="submit" name="submit" id="btn-log">Login</button><br>
            
            <p id="login-ok" style="display: none;">¡Login correcto!</p>
            <p id="login-ko" style="display: none;">¡Login incorrecto! Comprueba tu usuario y contraseña</p>

            <p class="copyright">©Proyecto U3 Henry_Fer Daw2_2021</p>

        </form>
    </div>
    <div class="register">
    <h4>If you dont have any account join us here</h4><br>
    <a href="../register/register.php"><button id="btn-reg" type="submit" name="submit"><span>Register</span></button></a>



</body>
</html>