<?php
    require_once('../modelo/class.conexion.php');
    require_once('../modelo/class.consultas.php');
    require_once('../controlador/cargarCliente.php');
   
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ListarProductos</title>
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

<div class="container ">
    <h1>cliente</h1>
    <br>    
    <?php
    
       
    cargarClie();
        

    ?>




</div>
   
</body>
</html>