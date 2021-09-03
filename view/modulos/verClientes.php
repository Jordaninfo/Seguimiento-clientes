
<?php
 require_once('modelo/class.conexion.php');
 require_once('modelo/class.consultas.php');
 require_once('controlador/cargarCliente.php');
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Ver clientes</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">ver Clientes</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<div>
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
            buscar($_GET['nombre']);
        }else {
            cargarCli();
        }

    ?>


</div>
   
  </div>