<?php
    $nombre = $_REQUEST["nombre"];
    $telefono = $_REQUEST["telefono"];
    $edad = $_REQUEST["edad"];
    
    //1. Connect to Database
    $host = "localhost";
    $dbname = "pasteleria";
    $username = "root";
    $password = "";

    $conexion = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    //2. Build SQL sentence
    $sql = "INSERT INTO clientes (id, nombre, telefono, edad) VALUES(NULL, '$nombre', '$telefono', '$edad')";

    //3. Prepare SQL sentence
    $a = $conexion->prepare($sql);

    //4. Execute SQL sentence
    $resultado = $a->execute();   

    if($resultado){
        echo "Cliente guardado con éxito";
    }
    else{
        echo "Error al crear cliente";
    }

?>