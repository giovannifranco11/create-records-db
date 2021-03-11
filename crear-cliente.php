<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css" type="text/css">

    <title>Crear Cliente</title>
</head>
<body background="imagenes/3.jpg">
<h1>
<center>
 <span class="titulos"> ♥♥♥♥♥♥♥♥♥♥ PASTELERÍA MONYSWEET ♥♥♥♥♥♥♥♥♥  </span> 
 <center/>
</h1>
<header>        
         <img src="imagenes/banner.jpg"" alt="Imagen">
    </header>
    <br/><br/>
<center>
 <span class="titulos">REGISTRO DE CLIENTES</span> 
  
    <form action="guardar-cliente.php" method="POST">
    <h2>Página Web 1:    Crear cliente nuevo </h2>
    <br/><br/>    
        Cliente: <input type="text" name="nombre"> 
        <br/><br/>
        Teléfono: <input type="text" name="telefono"> 
        <br/><br/>
        Edad: <input type="text" name="edad">
        <br/><br/>
        
        <input type="submit" value="Guardar cliente en BD">

</center>
    </form>

         
</body>
</html>