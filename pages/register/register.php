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
    <?php include_once "../../pages/header_footer/header.php"?>
    <div class="login_form">
        <h2>Thanks to join us!</h2>
        <form class="formulario" action="" method="POST">
        <input name="name" placeholder="Username"/><br>
        <input name="pass" placeholder="Password"/><br>
        <input name="mail" placeholder="eMail"/><br>
        <input name="phone" placeholder="Telephone"/><br>
        <button id="btn-log" type="submit" name="submit">Submit</button><br>
        </form>
    </div>



</body>
</html>