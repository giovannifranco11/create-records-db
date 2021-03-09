<?php
    $cliente = $_REQUEST["cliente"];
    $productos = $_REQUEST["productos"];
    $fecha_entrega = $_REQUEST["fecha_entrega"];
    
    //1. Connect to Database
    $host = "localhost";
    $dbname = "pasteleria";
    $username = "root";
    $password = "";

    $conexion = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    //2. Build SQL sentence
    $sql = "INSERT INTO pedidos (id, id_cliente, id_producto, fecha_entrega) VALUES(NULL, '$cliente', '$productos', '$fecha_entrega')";

    //3. Prepare SQL sentence
    $b = $conexion->prepare($sql);

    //4. Execute SQL sentence
    $resultado = $b->execute();   

    if($resultado){
        echo "Pedido creado con éxito";
    }
    else{
        echo "Error al crear el pedido";
           
    }

?>