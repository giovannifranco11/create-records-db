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

    ?>
    <h1>**********PASTELERÍA MONYSWEET******** <br/><br/></h1>
  
  <h1>FORMULARIO CLIENTES<br/><br/></h1>
        <form action="guardar-cliente.php" method="POST">
    <h2>Página Web 1    Crear cliente nuevo </h2>
    <br/><br/>    
        Cliente: <input type="text" name="nombre"> 
        <br/><br/>
        Teléfono: <input type="text" name="telefono"> 
        <br/><br/>
        Edad: <input type="text" name="edad">
        <br/><br/>
        
        <input type="submit" value="Guardar cliente en BD">

        
    </form>
        <?php     
        if($resultado){
            echo "El cliente de nombre: $nombre se ha guardado con éxito";   
    }
    else{
        echo "Error al crear cliente";
    }

?>