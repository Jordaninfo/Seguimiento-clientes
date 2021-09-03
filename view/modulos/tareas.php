<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tareas</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">tareas</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div>
    <form action="controlador/crearTarea.php" method="post" id="formulario">
            <div class="card">
                <div class="card-header">
                    <h1 style="color:rgb(39, 129, 247);">crear nueva tarea</h1>
                </div>
                <div class="card-body">
                   
                    <p class="card-text">
                        <div class="form-group">
                            <label for="nombre">Nombre tarea</label>
                            <input id="nombre" class="form-control" type="text" name="nombre">
                        </div><br>
                        <div class="form-group">
                            <label for="fecha">fecha</label>
                            <input id="fecha" class="form-control" type="date" name="fecha">
                        </div><br>
                        <div class="form-group">
                            <label for="hora">hora</label>
                            <input id="hora" class="form-control" type="text" name="hora">
                        </div><br>
                        <div class="form-group">
                            <label for="descripcion">descripcion</label>
                            <input id="descripcion" class="form-control" type="text" name="descripcion">
                        </div><br>
                        <div class="form-group">
                            <input id="boton" class="btn btn-primary" type="submit" value="crear tarea">
                        </div>
                        <a href="verCliente.php">ver clientes</a>
                       
                    </p>
                </div>
            </div>
        </form>
    </div>
  </div>