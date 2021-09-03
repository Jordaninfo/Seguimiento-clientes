<?php
require_once('../modelo/class.conexion.php');
require_once('../modelo/class.consultas.tareas.php');

$filas = null;
$consultas = new ConsultaTareas();

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$fecha = $_POST['fecha'];
$descripcion = $_POST['descripcion'];
$hora = $_POST['hora'];


if(  strlen($nombre) > 0 && strlen($fecha) > 0 && strlen($descripcion) > 0 && strlen($hora) > 0){
    $filas = $consultas->actualizarTareas('id',$id,$id);
    $filas = $consultas->actualizarTareas('nombre',$nombre,$id);
    $filas = $consultas->actualizarTareas('fecha',$fecha,$id);
    $filas = $consultas->actualizarTareas('descripcion',$descripcion,$id);
    $filas = $consultas->actualizarTareas('hora',$hora,$id);
                               
    //echo '<script language="javascript">alert("registro exitoso, ver clientes ");window.location="../view/verCliente.php";</script>';
    echo $filas;
}else{
    //echo '<script language="javascript">alert( "Por favor todos los campos son requeridos");window.location="../view/ingresarCliente.html";</script>';
    }
?>