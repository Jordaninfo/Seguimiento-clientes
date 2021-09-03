<?php
    function cargarcli(){
        $consultas = new Consulta();
        $filas = $consultas->cargarClientes();
        echo "<head>
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'>
        
     </head> ";
        echo "<table class ='table table-hover'>
            <tr>
               
                <th scope= 'col'>nombres</th>
                <th scope= 'col'>apellidos</th>
                <th scope= 'col'>telefono</th>
                <th scope= 'col'>numero_identificacion</th>
            </tr>";
        foreach($filas as $fila){
            echo "<tr>";
               
                echo "<td>".$fila['nombres']."</td>";
                echo "<td>".$fila['apellidos']."</td>";
                echo "<td>".$fila['telefono']."</td>";
                echo "<td>".$fila['numero_identificacion']."</td>"; 
                echo "<td><a href='view/modulos/editar.php?id=".$fila['id']."'>Editar</a></td>";                echo "<td><a href='view/modulos/ver.php?id=".$fila['id']."'>ver</a></td>";
                
            echo "</tr>";
    
    }
    
     echo "</table>";
    
    }

    function buscar($nombres){
        $consultas = new Consulta();
        $filas =$consultas->buscarClientes($nombres);
        echo "<head>
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'>
        
     </head> ";
        echo "<table class ='table table-hover'>
            <tr>
               
                <th scope= 'col'>nombres</th>
                <th scope= 'col'>apellidos</th>
                <th scope= 'col'>telefono</th>
                <th scope= 'col'>numero_identificacion</th>
            </tr>";
        foreach($filas as $fila){
            echo "<tr>";
               
                echo "<td>".$fila['nombres']."</td>";
                echo "<td>".$fila['apellidos']."</td>";
                echo "<td>".$fila['telefono']."</td>";
                echo "<td>".$fila['numero_identificacion']."</td>"; 
                echo "<td><a href='editar.php?id=".$fila['id']."'>Editar</a></td>";
                echo "<td><a href='../view/ver.php?id=".$fila['id']."'>ver</a></td>";
                
            echo "</tr>";
    
    }
    
     echo "</table>";
    
        
      
    }

    function cargarClie(){
        if(isset($_GET['id'])){
            $consultas = new Consulta();
            $id = $_GET['id'];
            $filas= $consultas -> cargarCliente($id);
        echo "<head>
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'>
        
     </head> ";
    echo' <div class="card">
        <div class="card-header">
          datos generales del cliente
        </div>
        <div class="card-body">
          <h5 class="card-title">cliente</h5>';
          foreach($filas as $fila){
            
            echo "<p>nombres: ".$fila['nombres']." ".$fila['apellidos']."</p>";
            echo "<p>telefono: ".$fila['telefono']."</p>";
            echo "<p>direccion: ".$fila['direccion']."</p>";
            echo "<p>correo: ".$fila['correo']."</p>";
            echo "<p>tipo de indentificacion: ".$fila['tipo_identificacion']."</p>"; 
            echo "<p>numero de identificacion: ".$fila['numero_identificacion']."</p>"; 
          }

            echo'  
            <img src="https://png.pngtree.com/element_our/png_detail/20181229/vector-users-icon-png_302626.jpg" 
            width="300" height="300" alt="" style="position: relative;left: 500px;top: -250px;"><br>';
            
            echo '<a href="verClientes.php" style="position: relative;top: -250px;" class="btn btn-primary">ver clientes</a>';
            echo '<a href="../view/tareas.html" style="position: relative;top: -250px;" class="btn btn-primary">crear tarea</a>
            
            
        </div>
            </div>';
    
        
    }
}
    
    
?>