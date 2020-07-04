<?php
    include_once("helper/Database.php");

    class SeccionModel{
        //atributos de acuerdo a los campos de la tabla en base de datos
        private $db;
        private $id_seccion;
        private $descripcion;

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

        public function guardarSeccion(){
            $sql = "INSERT INTO  seccion (id_seccion,descripcion) VALUES(NULL,?)";
            $stmt = $this->db->queryInsertarSeccion($sql,$this->descripcion);
            $this->db->close();
            return $stmt;
        }

        public function setDescripcion($descripcion){
            $this->descripcion = $descripcion;
        }
    }

?>