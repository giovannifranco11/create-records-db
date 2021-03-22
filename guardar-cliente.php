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

    <link rel="stylesheet" href="css/styles.css" type="text/css">

    <head>
        <title>Crear Cliente</title>
    </head>

    <body background="imagenes/3.jpg">
    <h1>
    <center>
    <span class="titulos"> ♥♥♥♥♥♥♥♥♥♥ PASTELERÍA MONYSWEET ♥♥♥♥♥♥♥♥♥ </span> 
 <center/>
</h1>
<header>  
    <center>      
         <img src="imagenes/banner2.jpg"" alt="Imagen">
</center>
    </header>
    <br/><br/>
  
    <center>
 <span class="titulos">REGISTRO DE CLIENTES</span>

        <form action="guardar-cliente.php" method="POST">
    <h2>Página Web 2:    Crear nuevo cliente </h2>
     
        <h2>Crear nuevo cliente:</h2>  
        <br/> 
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

</body>