<?php
function seleccionarT(){
    if(isset($_GET['id'])){
        $consultas = new ConsultaTareas();
        $id = $_GET['id'];
        $filas= $consultas -> cargarTarea($id);
    
        echo '<head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        </head> 
        ';
        foreach ($filas as $fila){
           
            echo ' 
     
    <form action="../../controlador/editarTarea.php?='.$id.'" method="post" id="formulario">
            <div class="card">
                <div class="card-header">
                    <h1 style="color:rgb(39, 129, 247);">actualizar datos del cliente</h1>
                </div>
                <div class="card-body">
                   
                    <p class="card-text">
                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input id="nombre" class="form-control" type="text" name="nombre" value ="'.$fila['nombre'].'">
                        </div><br>
                        <div class="form-group">
                            <label for="fecha">Fecha:</label>
                            <input id="fecha" class="form-control" type="text" name="fecha" value ="'.$fila['fecha'].'">
                        </div><br>
                        <div class="form-group">
                            <label for="descripcion">Descripcion:</label>
                            <input id="descripcion" class="form-control" type="text" name="descripcion" value ="'.$fila['descripcion'].'">
                        </div><br>
                        <div class="form-group">
                            <label for="hora">Hora:</label>
                            <input id="hora" class="form-control" type="text" name="hora" value ="'.$fila['hora'].'">
                        </div><br>                      
                        <div>
                        <input type="hidden" name="id" id="id" value ="'.$id.'"><br><br>
                        </div>
                        <div class="form-group">
                        <input id="boton" class="btn btn-primary" type="submit" value="actualizar cliente">
                        </div>
                        <a href="../view/verCliente.php" style="text-align: center;font-size: 20px;">regresar</a>
                        

                    </p>
                </div>
            </div>
        </form>';

     
        
        }
    }
        
    }


?>