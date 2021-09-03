<?php
require_once('../modelo/class.conexion.php');
require_once('../modelo/class.consultas.php');

$filas = null;
$consultas = new Consulta();

$id = $_POST['id'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$correo = $_POST['correo'];
$tipo_identificacion = $_POST['tipo_identificacion'];
$numero_identificacion = $_POST['numero_identificacion'];

if(  strlen($nombres) > 0 && strlen($apellidos) > 0 && strlen($telefono) > 0 && strlen($direccion) > 0 && strlen($correo) > 0&& strlen($tipo_identificacion) > 0 && strlen($numero_identificacion) > 0){
    $filas = $consultas->actualizarCliente('id',$id,$id);
    $filas = $consultas->actualizarCliente('nombres',$nombres,$id);
    $filas = $consultas->actualizarCliente('apellidos',$apellidos,$id);
    $filas = $consultas->actualizarCliente('telefono',$telefono,$id);
    $filas = $consultas->actualizarCliente('direccion',$direccion,$id);
    $filas = $consultas->actualizarCliente('correo',$correo,$id);
    $filas = $consultas->actualizarCliente('tipo_identificacion',$tipo_identificacion,$id);
    $filas = $consultas->actualizarCliente('numero_identificacion',$numero_identificacion,$id);
    echo '<script language="javascript">alert("registro exitoso, ver clientes ");window.location="../view/modulos/verCliente.php";</script>';
    echo $filas;
}else{
    echo '<script language="javascript">alert( "Por favor todos los campos son requeridos");window.location="../view/ingresarCliente.html";</script>';
    }
?>