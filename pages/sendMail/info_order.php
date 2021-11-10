<?php

function finalinvoice(){
    require_once '../utils/cookies.php';
    require_once '../utils/sesion.php';

    $info= infocookies();
    $inf="<h1>".$user." tu pedido</h1><br>"; 
 
    $inf .= "<table> 
        <tr><th>Game</th><th>Cant.</th><th>Precio Unitario</th><th>Importe</th></tr>"; 
 
         
    foreach($info as $i){ 
 
        $inf.="<tr><td>".$i['id']."</td>"; 
        $inf.="<td>".$i['quantity']."</td>"; 
        $inf.="<td>".$i['prive']."</td>"; 
        $inf.="<td>".$i['total_price']."</td></tr>"; 
    } 
 
    $inf.="</table>"; 
     
      
 
   return $inf;


}
echo finalinvoice();
?>