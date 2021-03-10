<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Cliente</title>
</head>
<body>
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

         
</body>
</html>