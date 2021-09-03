<?php
require_once("../modelo/class.conexion.php");
require_once("../modelo/class.consulta.tareas.php");




$mensaje = null;
$nombre = $_POST['nombre'];
$fecha = $_POST['fecha'];
$descripcion = $_POST['descripcion'];
$hora = $_POST['hora'];

if(  strlen($nombre) > 0 && strlen($fecha) > 0 && strlen($descripcion) > 0 && strlen($hora) > 0){
    $consultas = new ConsultaTareas();
    $mensaje = $consultas->ingresarTarea($nombre,$fecha,$descripcion,$hora);
    //echo "<a href='../login.html'>regresar al login </a>";
   // echo '<script language="javascript">alert("registro exitoso");window.location="../view/plantilla.php";</script>';
}else{
    echo '<script language="javascript">alert( "Por favor todos los campos son requeridos");window.location="../view/ingresarCliente.html";</script>';
}
echo $mensaje;



  
?>