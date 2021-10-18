<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>U3_Project</title>
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    
</head>
<body>
    <?php include_once "../header_footer/header.php"?>
    <div class="login">
        <fieldset style="background-color: darkcyan">
            <form class="formulario" action="" method="POST">
                <labe>Login with your user and password</label><br>
                <input name="name" placeholder="Username"/>
                <input name="pass" placeholder="Password"/>
                <button type="submit" name="submit">Login</button><br>
                <labe>If you dont have an account join us here</label><br>
                <button type="submit" name="submit">Register</button>
            </fieldset>
            </form>
    </div>
    <div class="register">
        <fieldset style="background-color: #112">
            <form class="formulario" action="" method="POST">
                <input name="name" placeholder="Username"/><br>
                <input name="pass" placeholder="Password"/><br>
                <input name="mail" placeholder="eMail"/><br>
                <input name="city" placeholder="City"/><br>
                <button type="submit" name="submit">Submit</button><br>
            </fieldset>
            </form>
    </div>

</body>
</html>