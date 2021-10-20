<?php
require_once "./bbdd/conexion.php";
$user= $_POST['name'];
$pass = $_POST['pass'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];


$register = $bd->prepare("SELECT * FROM user where user = '$user'");
$control = $bd->execute($login);
$row_cnt = $control->num_rows;

if ($row_cnt == 0){
    $sql = $bd->prepare ("INSERT INTO usuario(usuario,contraseña) VALUES ('$usuario', '$pass')");
    $registro = $bd->execute($sql);
    echo' <div class="main"> <h1> Registrado</h1></div>';
    echo"<div class='main'><a href='login.html'><button>Acceder</button></a>";
    echo "<a href='index.html'><button>Inicio</button></a></div>";
}
else{
    echo '<script type="text/javascript">
        alert("Usuario ya existe");
        </script>';
        echo'<div class="main"><h1>Lo sentimos</h1></div>';
        echo'<div class="main"><h4>Usuario ya existe</h4></div>';
        echo'<div class="main"><a href="registro.html"><button>Registro</button></a>';
        echo'<a href="index.html"><button>Inicio</button></a></div>';



}

