<?php

class Hospedaje { 

    private $hos_id; 
    private $hos_nombre; 

    function __construct() {

    }

    function setHosId($hos_id){ 
        $this->hos_id = $hos_id;
    }

    function setHosNombre($hos_nombre){
        $this->hos_nombre = $hos_nombre;
    }

    function getHosId() {
        return $this->hos_id;
    }

    function getHosNombre() {
        return $this->hos_nombre;
    }
}