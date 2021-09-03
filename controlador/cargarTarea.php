<?php
    function cargarTa(){
        $consultas = new ConsultaTareas();
        $filas = $consultas->cargarTareas();
        echo "<head>
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'>
        
     </head> ";
        echo "<table class ='table table-hover'>
            <tr>
               
                <th scope= 'col'>nombre</th>
                <th scope= 'col'>fecha</th>
                <th scope= 'col'>descripcion</th>
                <th scope= 'col'>hora</th>
            </tr>";
        foreach($filas as $fila){
            echo "<tr>";
               
                echo "<td>".$fila['nombre']."</td>";
                echo "<td>".$fila['fecha']."</td>";
                echo "<td>".$fila['descripcion']."</td>";
                echo "<td>".$fila['hora']."</td>"; 
                echo "<td><a href='view/modulos/editarT.php?id=".$fila['id']."'>Editar</a></td>";
                echo "<td><a href='view/modulos/verT.php?id=".$fila['id']."'>ver</a></td>";
                
            echo "</tr>";
    
    }
    
     echo "</table>";
    
    }

    

    function cargarTar(){
        if(isset($_GET['id'])){
            $consultas = new ConsultaTareas();
            $id = $_GET['id'];
            $filas= $consultas -> cargarTarea($id);
        echo "<head>
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'>
        
     </head> ";
    echo' <div class="card">
        <div class="card-header">
          datos generales de la tarea
        </div>
        <div class="card-body">
          <h5 class="card-title">Tarea</h5>';
          foreach($filas as $fila){
            
            echo "<p>nombre: ".$fila['nombre']."</p>";
            echo "<p>fecha: ".$fila['fecha']."</p>";
            echo "<p>descripcion: ".$fila['descripcion']."</p>";
            echo "<p>hora: ".$fila['hora']."</p>";
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