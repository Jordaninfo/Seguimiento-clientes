<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Clientes</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">clientes</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <div>

    <form action="controlador/registrarCliente.php" method="post" id="FormSaveUser" target="request">
            <div class="card">
                <div class="card-header">
                    <h1 style="color:rgb(39, 129, 247);">ingresar datos del cliente</h1>
                </div>
                <div class="card-body">
                   
                    <p class="card-text">
                        <div class="form-group">
                            <label for="tipo_identificacion">tipo de indentificacion:</label>
                            <input id="tipo_identificacion" class="form-control" type="text" name="tipo_identificacion">
                        </div><br>
                        <div class="form-group">
                            <label for="numero_identificacion">numero de identificacion:</label>
                            <input id="numero_identificacion" class="form-control" type="number" name="numero_identificacion">
                        </div><br>
                        <div class="form-group">
                            <label for="nombres">Nombres:</label>
                            <input id="nombres" class="form-control" type="text" name="nombres">
                        </div><br>
                        <div class="form-group">
                            <label for="apellidos">Apellidos:</label>
                            <input id="apellidos" class="form-control" type="text" name="apellidos">
                        </div><br>
                        <div class="form-group">
                            <label for="telefono">Telefono:</label>
                            <input id="telefono" class="form-control" type="number" name="telefono">
                        </div><br>
                        <div class="form-group">
                            <label for="correo">Correo:</label>
                            <input id="correo" class="form-control" type="email" name="correo">
                        </div><br>
                        <div class="form-group">
                            <label for="direccion">direccion:</label>
                            <input id="direccion" class="form-control" type="text" name="direccion">
                        </div> <br>
                        <div class="form-group">
                            <input id="boton" class="btn btn-primary" type="submit" value="guardar cliente">
                        </div>
                        <a href="verCliente.php" style="text-align: center;font-size: 20px;">regresar</a>
                        <iframe id="request"></iframe>
                        <div id="response"></div>
                        
                    </p>
                </div>
            </div>
        </form>
    </div>
    
  </div>