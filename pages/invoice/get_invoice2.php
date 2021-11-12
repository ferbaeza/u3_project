<?php

    require_once "../../utils/utils.php";

    $cadena_conexion = 'mysql:host=localhost; dbname=tiendaRetro26; charset=utf8';
    $usuario = 'root';
    $clave = '';
    try {
        $bd = new PDO($cadena_conexion, $usuario, $clave);
    } catch (PDOException $e) {
        echo 'Error con la base de datos: ' . $e->getMessage();
    } 

    session_start();
    $id_usu = $_SESSION['id'];
    $error = false;
    $tot = 1;
    $bd->beginTransaction();

    function insertPedido($id_usu, $tot){
        //insert de pedido con total a 1 que luego corregiremos
        global $bd;
        global $id_usu;
        $prepare1 = $bd->prepare('INSERT into pedido(total, id_usuario) values(:tot, :id_usu)');															
        $prepare1->bindParam(':tot', $tot);
        $prepare1->bindParam(':id_usu', $id_usu);
        
        $prepare1->execute();	
    }
            
    function &idPedido(){
        //Cogemos el último id_pedido
        global $bd;
        $prepare0 = $bd->prepare('SELECT MAX(id_pedido) FROM pedido');
        $prepare0->execute();
        $id_puta = $prepare0->fetch();
        $id_p = $id_puta[0];
        return $id_p;
    }
    
    function insertLinea($id_c, $quantity, $precio, $precio_total){
        $referencia =& idPedido();
        global $bd;
        //Insertamos las lineas de pedido
        $prepare2 = $bd->prepare('INSERT into linea_pedido(id_pedido, id_cancion, reproducciones, precio, precio_total) values(:id_p, :id_c, :reproducciones, :precio, :precio_total)');
        $prepare2->bindParam(':id_p', $referencia);
        $prepare2->bindParam(':id_c', $id_c);
        $prepare2->bindParam(':reproducciones', $quantity);
        $prepare2->bindParam(':precio', $precio);
        $prepare2->bindParam(':precio_total', $precio_total);
        $prepare2->execute();
    }
    
    function &calcTotal(){
        $referencia =& idPedido();
        global $bd;
        //Cogemos la suma del total para hacer update a facura
        $prepare3 = $bd->prepare('SELECT SUM(precio_total) FROM linea_pedido WHERE id_pedido = :id_p');
        $prepare3->bindParam(':id_p', $referencia);
        $prepare3->execute();
        $suma = $prepare3->fetch();
        $t = $suma[0];
        return $t;
    }

    function updateTotal(){
        global $bd;
        $referencia =& idPedido();
        $referenciados =& calcTotal();
        //Hacemos el update del total de pedido
        $prepare4 = $bd->prepare('UPDATE pedido SET total = :total where id_pedido = :id_p');
        $prepare4->bindParam(':total', $referenciados);
        $prepare4->bindParam(':id_p', $referencia);
        $prepare4->execute();
    }  

    function &verStock($id_c){
        global $bd;
        //Comprobamos que hay stock
        $prepare5 = $bd->prepare('SELECT stock FROM music WHERE id = :id_c');
        $prepare5->bindParam(':id_c', $id_c);
        $prepare5->execute();
        $stock = $prepare5->fetch();
        $s = $stock[0];
        return $s;
    }

    function comprobarStock($quantity){
        $referencia3 =& verStock($id_c);
        if($referencia3 < $quantity){
            $error = true;
        }
    }
    
    function updateStock($quantity, $id_c){
        global $bd;
        $referencia3 =& verStock($id_c);
        $prepare6 = $bd->prepare('UPDATE music SET stock = :rep where id = :id_c');
        $prepare6->bindParam(':rep', $referencia3 - $quantity);
        $prepare6->bindParam(':id_c', $id_c);
        $prepare6->execute();
    }


    $carritoArray=[];
    $carrito=[];

    $error = false;
    $tot = 1;
    insertPedido($id_usu, $tot);

    //Si la cookie de favoritos no está creada, devolverá un array vacío
    if(isset($_COOKIE['carrito'])){
        
        $info = json_decode($_COOKIE['carrito']);
        //echo htmlspecialchars($_COOKIE["carrito"]);
        //echo var_dump($info);

        //Preparo los datos a enviar al cliente
        foreach($info as $f) {
            //echo var_dump($f);

            $id=$f->id;
            //var_dump($id);
            $prepare = $bd->prepare('SELECT * FROM music WHERE id=:id');

            $params = array(
                ':id' => $id,
            );
            $tot = 0;
            $prepare->execute($params);
            //var_dump($prepare->fetchAll());
            $cookiesMusic = $prepare->fetchAll();
            //var_dump( $cookiesMusic);
            //echo var_dump($cookiesMusic);
            $row= $prepare->rowCount();
            $tot = 1;
            foreach($cookiesMusic as $pro){
                
            
                $carrito= [
                    "id" => $pro['id'],
                    "nombre" => $pro['nombre'],
                    "autor" => $pro['autor'],
                    "genero" => $pro['genero'],
                    "precio" => $pro['precio'],
                    "precio_total" => $pro['precio'] * $f->quantity,
                    "quantity" => $f->quantity
                ];
                
                $carritoArray[]=$carrito;
                $id_c = $pro['id'];
                $precio = $pro['precio'];
                $quantity = $f->quantity;
                $precio_total = $precio * $quantity;
                
                
                echo "llega1";
                insertLinea($id_c, $quantity, $precio, $precio_total);
                echo "llega2";
                updateTotal();
                echo "llega3";
                comprobarStock($quantity);
                echo "llega4";
                updateStock($quantity, $id_c);
                echo "todo5";
            }
        }
        echo getResponse("OK", "Musica obtenida correctamente", $carritoArray);
    
    }else{
        echo getResponse("OK", "Musica obtenida correctamente", $carritoArray);
    }



    
    
    
    
    
    
    
    //Final
    if($error) {
        //rollback
        $bd->rollback();
        echo "ERROR";
    } else{
        //commit
        $bd->commit();
        echo "Completado con exito";
    }