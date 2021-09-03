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
    <title></title>
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container ">
      <ul class="nav justify-content-center">
      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../index.html">regresar </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="ingresarCliente.html">ingresar cliente </a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="verCliente.php">ver clientes </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tareas.html">crear tareas</a>
        </li>
        <li class="nav-item">
        <form action="" method= "GET">
        <input type="text" name="buscar">
        <input type= "submit" value="buscar">
    </form>
        </li>
        
      </ul>
    
    <br>
    
    <?php
    
        if(isset($_GET['buscar'])){
            buscar($_GET['buscar']);
        }else {
            cargarCli();
        }

    ?>




</div>
   
</body>
</html>