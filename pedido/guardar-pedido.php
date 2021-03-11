<?php
    
    
    //1. Connect to Database
    $host = "localhost";
    $dbname = "pasteleria";
    $username = "root";
    $password = "";

    $conexion = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    //2. Build SQL sentence
    $sql = "SELECT id, nombre FROM clientes";
    //3. Prepare SQL sentence
    $b = $conexion->prepare($sql);
    //4. Execute SQL sentence
    $resultado = $b->execute();
    $clientes = $b->fetchALL();


    //2. Build SQL sentence
    $sql = "SELECT id, nombre FROM productos";
    //3. Prepare SQL sentence
    $b = $conexion->prepare($sql);
    //4. Execute SQL sentence
    $resultado = $b->execute();
    $producto = $b->fetchALL();

    //var_dump($productos);

    ?>

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
    ?>

<link rel="stylesheet" href="css/styles.css" type="text/css">

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
 <span class="titulos">REGISTRO DE PEDIDOS</span>
    
<form action="guardar-pedido.php" method="GET">
        <h2>Página Web 4:    Crear nuevo pedido</h2>
        <br/><br/>
    Cliente: 
        <select name="cliente" id="">
        <option value="">--Seleccione--</option>
            <?php
                for($i=0; $i<count($clientes); $i++){
            ?>
                <option value="<?php echo $clientes[$i]["id"] ?>">
                    <?php echo $clientes[$i]["nombre"] ?>
                </option>
                
            <?php
                }
            ?>            
        <select/>

        <br/><br/>

        Producto: 
        <select name="producto" id="">
        <option value="">--Seleccione--</option>
        <?php
            for($i=0; $i<count($producto); $i++){
        ?>
            <option value="<?php echo $producto[$i]["id"] ?>">
                <?php echo $producto[$i]["nombre"] ?>
            </option>
        <?php
            }
        ?>
            
        <select/>

        <br/>
        
        <br/>
        Fecha entrega:<input type="text" name="fecha_entrega">
        <br/><br/>
        
        <input type="submit" value="Crear Nuevo Pedido">

    </form>

<?php

    if($resultado){
        echo "El pedido con el id_producto: $productos asociado al id_cliente: $cliente se ha creado con éxito";
    }
    else{
        echo "Error al crear el pedido";
           
    }

?>
</body>