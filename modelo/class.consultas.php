<?php
class Consulta{
    public function ingresarCliente($nombres,$apellidos,$telefono,$direccion,$correo,$tipo_identificacion,$numero_identificacion){
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "insert into cliente(nombres,apellidos,telefono,direccion,correo,tipo_identificacion,numero_identificacion) values (:nombres,:apellidos,:telefono,:direccion,:correo,:tipo_identificacion,:numero_identificacion)";
        $statement = $conexion -> prepare($sql);
        $statement->bindParam(':nombres', $nombres);
        $statement->bindParam(':apellidos', $apellidos);
        $statement->bindParam(':telefono', $telefono);
        $statement->bindParam(':direccion', $direccion);
        $statement->bindParam(':correo', $correo);
        $statement->bindParam(':tipo_identificacion', $tipo_identificacion);
        $statement->bindParam(':numero_identificacion', $numero_identificacion);

        if(!$statement){
            return "Error no se puede realizar  la carga";
        }else{
            $statement->execute();
            return "La inserción se realizó exitosamente";
        }
    }

    public function cargarClientes(){
            $filas = null; //declaramos una variable vacia 
            $modelo = new Conexion(); // creamos una nueva conexion 
            $conexion = $modelo->get_conexion(); // accedemos al miembro del objeto conexion y la ejecutamos 
            $sql = "select * from cliente"; // declaramos la consulta sql 
            $statement = $conexion -> prepare($sql); //preparamos la consulta 
            $statement->execute();     //ejecutamos la consulta     
            while($resultado = $statement->fetch()){   //asignamos a la variable resultado todo el registro devuelto 
                $filas[]= $resultado; 
            }
            return $filas; //retornamos filas 
        }



    

        public function buscarClientes($nombres){
            $filas=null;
            $modelo = new Conexion();
            $conexion = $modelo->get_conexion();
            $nombres = "%".$nombres."%";
            $sql = "select * from cliente where nombres like :nombres";
            $statement = $conexion-> prepare($sql);
            $statement->bindParam(':nombres', $nombres);
            $statement->execute();
            while($resultado = $statement->fetch()){
                $filas[]= $resultado; 
            }
            return $filas;
        }
        
        
        //fetch nos trae todo el registro 
        function cargarCliente($id){
            $registro= null;
            $modelo = new Conexion();   
            $conexion = $modelo->get_conexion();
            $sql= "select * from cliente where id= :id";
            $statement = $conexion-> prepare($sql);
            $statement->bindParam(':id', $id);
            $statement->execute();

            while($resultado=$statement->fetch()){
                $registro[]=$resultado;
            }
            return $registro;

        }

        function actualizarCliente($campo,$valor,$id){
            $modelo = new Conexion();   
            $conexion = $modelo->get_conexion();
            $sql= "update cliente set $campo = :valor where id= :id";
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