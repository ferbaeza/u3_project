<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>U3_Project</title>
    <link href="../../css/header.css" rel="stylesheet" type="text/css">
    <link href="../../css/login.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="login.js"></script>
</head>
<body>
    <?php include_once "../header_footer/header.php"?>
    <div class="login_form">
        <h2>Start with your user and password</h2>
        <form class="formulario" action="" method="POST">
            <input name="name">
            <input name="pass">
            <button type="submit" name="submit" id="btn-log">Login</button><br>
        </form>
    </div>
    <div class="register">
    <h4>If you dont have any account join us here</h4><br>
    <a href="../register/register.php"><button id="btn-reg" type="submit" name="submit"><span>Register</span></button></a>



</body>
</html>