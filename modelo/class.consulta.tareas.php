<?php
class ConsultaTareas{
    public function ingresarTarea($nombre,$fecha,$descripcion,$hora){
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "insert into tareas(nombre,fecha,descripcion,hora) values (:nombre,:fecha,:descripcion,:hora)";
        $statement = $conexion -> prepare($sql);
        $statement->bindParam(':nombre', $nombre);
        $statement->bindParam(':fecha', $fecha);
        $statement->bindParam(':descripcion', $descripcion);
        $statement->bindParam(':hora', $hora);

        if(!$statement){
            return "Error no se puede realizar  la tarea";
        }else{
            $statement->execute();
            return "La inserción se realizó exitosamente";
        }
    }

    public function cargarTareas(){
        $filas = null; //declaramos una variable vacia 
        $modelo = new Conexion(); // creamos una nueva conexion 
        $conexion = $modelo->get_conexion(); // accedemos al miembro del objeto conexion y la ejecutamos 
        $sql = "select * from tareas"; // declaramos la consulta sql 
        $statement = $conexion -> prepare($sql); //preparamos la consulta 
        $statement->execute();     //ejecutamos la consulta     
        while($resultado = $statement->fetch()){   //asignamos a la variable resultado todo el registro devuelto 
            $filas[]= $resultado; 
        }
        return $filas; //retornamos filas 
    }
    function cargarTarea($id){
        $registro= null;
        $modelo = new Conexion();   
        $conexion = $modelo->get_conexion();
        $sql= "select * from tareas where id= :id";
        $statement = $conexion-> prepare($sql);
        $statement->bindParam(':id', $id);
        $statement->execute();

        while($resultado=$statement->fetch()){
            $registro[]=$resultado;
        }
        return $registro;

    }
    function actualizarTareas($campo,$valor,$id){
        $modelo = new Conexion();   
        $conexion = $modelo->get_conexion();
        $sql= "update tareas set $campo = :valor where id= :id";
        $statement = $conexion-> prepare($sql);
        $statement->bindParam(':valor', $valor);
        $statement->bindParam(':id', $id);
        
        if(!$statement){
            return "Error no se puede realizar  la actualizacion";
        }else{
            $statement->execute();
            return "La actualizacion se realizó exitosamente";

           
        }
       

    }
}

?>