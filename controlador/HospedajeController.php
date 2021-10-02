<?php

class HospedajeController {


    private $conexion;

    function __construct() {
        $this->conexion = new conexion();
        $this->conexion->getConexion()->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    function listar()
    {
        try {
            $sql = "select * from hospedaje"; 
            $ps = $this->conexion->getConexion()->prepare($sql);
            $ps->execute(NULL);

            $resultado = [];

            while($row = $ps->fetch(PDO::FETCH_OBJ)){
                $hospedaje = new Hospedaje; 
                $hospedaje->setHosId($row->hos_id); 
                $hospedaje->setHosNombre($row->hos_nombre); 
                array_push($resultado, $hospedaje); 
            }
            $this->conexion = null;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
        return $resultado;
    }

    function crear($hospedaje) 
    {
        $resultado = [];
        try {
            $sql = "insert into hospedaje values (?,?)"; 
            $ps = $this->conexion->getConexion()->prepare($sql);
            $ps->execute(array(
                $hospedaje->getHosId(), 
                $hospedaje->getHosNombre() 
            ));

            if($ps->rowCount() > 0){
                $mensaje = "Se creó correctamente el hospedaje"; 
                $type    = "success";
            }else {
                $mensaje = "No se pudo crear el hospedaje"; 
                $type    = "error";
            }
            $this->conexion = null;
        }catch(PDOException $e){
            $mensaje = "No se pudo crear el hospedaje " .$e->getMessage(); 
            $type    = "error";
        }

        $resultado = [
            "mensaje" => $mensaje,
            "type"    => $type
        ];

        return $resultado;
    }

    function buscar($hos_id) 
    {
        try {
            $sql = "select * from hospedaje where dep_id = ?";
            $ps = $this->conexion->getConexion()->prepare($sql);
            $ps->execute(array(
                $hos_id
            ));
            $resultado = [];
            while($row = $ps->fetch(PDO::FETCH_OBJ)) {
                $hospedaje = new Hospedaje;
                $hospedaje->setHosId($row->hos_id);
                $hospedaje->setHosNombre($row->hos_nombre);
                array_push($resultado,$hospedaje);
            }

            $this->conexion = null;

        }catch(PDOException $e){
            echo "Ocurrio un error " . $e->getMessage();
        }

        return $resultado;
    }

    function actualizar($hospedaje) {
        $resultado = [];

        $sql = "update hospedaje set hos_nombre=? where hos_id=?";
        $ps = $this->conexion->getConexion()->prepare($sql);
        $ps->execute(array(
            $hospedaje->getHosNombre(),
            $hospedaje->getHosId()
        ));

        if($ps->rowCount() > 0){
            $mensaje = "Se actualizó correctamente el hospedaje";
            $type = "success";
        }else {
            $mensaje = "No se pudo actualizar el hospedaje";
            $type = "error";
        }
        
        $this->conexion = null;

        $resultado = [
            "mensaje" => $mensaje,
            "type"    => $type
        ];

        return $resultado;
    }

    function eliminar($hospedaje)
    {
        $resultado = [];

        $sql = "delete from hospedaje where hos_id=?";
        $ps = $this->conexion->getConexion()->prepare($sql);
        $ps->execute(array(
            $hospedaje->getHosId()
        ));

        if($ps->rowCount() > 0){
            $mensaje = "Se eliminó correctamente el hospedaje";
            $type = "success";
        }else {
            $mensaje = "No se pudo eliminar el hospedaje";
            $type = "error";
        }
        
        $this->conexion = null;

        $resultado = [
            "mensaje" => $mensaje,
            "type"    => $type
        ];

        return $resultado;
    }
}