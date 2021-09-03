<?php
function seleccionarCliente(){
    if(isset($_GET['id'])){
        $consultas = new Consulta();
        $id = $_GET['id'];
        $filas= $consultas -> cargarCliente($id);
    
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
    <form action="../../controlador/editarCliente.php?='.$id.'" method="post" id="formulario">
            <div class="card">
                <div class="card-header">
                    <h1 style="color:rgb(39, 129, 247);">actualizar datos del cliente</h1>
                </div>
                <div class="card-body">
                   
                    <p class="card-text">
                        <div class="form-group">
                            <label for="tipo_identificacion"></label>
                            <input id="tipo_identificacion" class="form-control" type="text" name="tipo_identificacion"  value ="'.$fila['tipo_identificacion'].'">
                        </div><br>
                        <div class="form-group">
                            <label for="numero_identificacion">numero de identificacion:</label>
                            <input id="numero_identificacion" class="form-control" type="number" name="numero_identificacion" value ="'.$fila['numero_identificacion'].'">
                        </div><br>
                        <div class="form-group">
                            <label for="nombres">Nombres:</label>
                            <input id="nombres" class="form-control" type="text" name="nombres" value ="'.$fila['nombres'].'">
                        </div><br>
                        <div class="form-group">
                            <label for="apellidos">Apellidos:</label>
                            <input id="apellidos" class="form-control" type="text" name="apellidos" value ="'.$fila['apellidos'].'">
                        </div><br>
                        <div class="form-group">
                            <label for="telefono">Telefono:</label>
                            <input id="telefono" class="form-control" type="number" name="telefono" value ="'.$fila['telefono'].'">
                        </div><br>
                        <div class="form-group">
                            <label for="correo">Correo:</label>
                            <input id="correo" class="form-control" type="email" name="correo" value ="'.$fila['correo'].'">
                        </div><br>
                        <div class="form-group">
                        <label for="direccion">direccion:</label>

                        <input id="direccion" class="form-control" type="text" name="direccion" value ="'.$fila['direccion'].'">

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