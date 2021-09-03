<?php
require_once("../modelo/class.conexion.php");
require_once("../modelo/class.consultas.php");




$mensaje = null;
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$correo = $_POST['correo'];
$tipo_identificacion = $_POST['tipo_identificacion'];
$numero_identificacion = $_POST['numero_identificacion'];


if(  strlen($nombres) > 0 && strlen($apellidos) > 0 && strlen($telefono) > 0 && strlen($direccion) > 0 && strlen($correo) > 0&& strlen($tipo_identificacion) > 0 && strlen($numero_identificacion) > 0){
    $consultas = new Consulta();
    $mensaje = $consultas->ingresarCliente($nombres,$apellidos,$telefono,$direccion,$correo,$tipo_identificacion,$numero_identificacion);
    //echo "<a href='../login.html'>regresar al login </a>";
   // echo '<script language="javascript">alert("registro exitoso");window.location="../view/plantilla.php";</script>';
}else{
    echo '<script language="javascript">alert( "Por favor todos los campos son requeridos");window.location="../view/ingresarCliente.html";</script>';
}
echo $mensaje;

  
?>