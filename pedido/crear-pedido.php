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
    $productos = $b->fetchALL();

    //var_dump($productos);

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Pedido</title>
</head>
<body>
<h1>**********PASTELERÍA MONYSWEET******** <br/><br/></h1>
  
<h1>FORMULARIO PEDIDOS <br/><br/></h1>
    
<form action="guardar-pedido.php" method="GET">
        <h2>Página Web 2    Crear nuevo pedido</h2>
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
        <select name="productos" id="">
        <option value="">--Seleccione--</option>
        <?php
            for($i=0; $i<count($productos); $i++){
        ?>
            <option value="<?php echo $productos[$i]["id"] ?>">
                <?php echo $productos[$i]["nombre"] ?>
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
    <br/><br/>
 
</body>
</html>