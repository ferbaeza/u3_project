<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>U3_Project</title>
    <link href="./css/header.css" rel="stylesheet" type="text/css">
    <link href="./css/login.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="./pages/login/login.js"></script>
</head>
<body>
    <?php include_once "./pages/header_footer/main_header.php"?>
    <div class="login_form">
        <h2>Start with your user and password</h2>
        <form class="formulario" onsubmit="return doLogin();" method="POST">
            <input name="name">
            <input name="pass">
            <button type="submit" name="submit" id="btn-log">Login</button><br>
            
            <p id="login-ok" style="display: none;">¡Login correcto!</p>
            <p id="login-ko" style="display: none;">¡Login incorrecto! Comprueba el email y la contraseña</p>

            <p class="mt-5 mb-3 text-muted">© 2017–2021</p>

        </form>
    </div>
    <div class="register">
    <h4>If you dont have any account join us here</h4><br>
    <a href="./pages/register/register.php"><button id="btn-reg" type="submit" name="submit"><span>Register</span></button></a>



</body>
</html>