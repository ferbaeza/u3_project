<?php

function finalinvoice(){
    require_once '../utils/cookies.php';
    session_start();

    $info= infocookies();
    $inf="<h1>Te hemos enviado tu pedido <span style=color:tomato;>".$_SESSION['user_loged']."</span> </h1><br>"; 
    $inf.="<h4 style=color:slategrey;>".$_SESSION['mail_loged']." </h4><br>";
    $inf.="<h4>Pedido realizado <span style=color:slategrey;>".$_SESSION['hora_conexion']."</span> </h4><br>";
 
    $inf .= "<table style= text-align:center;> 
        <tr><th>Game</th><th>Cant.</th><th>Precio Unitario</th><th>Importe</th></tr>"; 
 
    $suma=0;     
    foreach($info as $i){ 
 
        $inf.="<tr><td>".$i['name']."</td>"; 
        $inf.="<td>".$i['quantity']."</td>"; 
        $inf.="<td>".$i['price']."</td>"; 
        $inf.="<td>".$i['total_price']."</td></tr>"; 
    
        $suma= $suma+$i['total_price']; 
    } 
 
    $inf.="</table>"; 
    $inf.="<h4 style=color:slategrey;>Total de su pedido  <span style='color:tomato; font-size: 26px;'>".$suma."</span></h4>";

     
      
 
   return $inf;


}
echo finalinvoice();
?>