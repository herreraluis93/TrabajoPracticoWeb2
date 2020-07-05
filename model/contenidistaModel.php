<?php
    include_once("helper/Database.php");

    class ContenidistaModel{
        //atributos de acuerdo a los campos de la tabla en base de datos
        private $db;

        public function __construct(){
            $this->db = new Database();
        }

        public function obtenerSecciones(){
            $sql = "SELECT * FROM  seccion";
            $secciones = $this->db->querySelectSecciones($sql);
            $resultado = false;
            if($secciones){
                $resultado = $secciones;
            }
            return $resultado;
        }

        public function obtenerPublicaciones(){
            $sql = "SELECT * FROM  publicacion";
            $secciones = $this->db->querySelectSecciones($sql);
            $resultado = false;
            if($secciones){
                $resultado = $secciones;
            }
            return $resultado;
        }

    }

?>