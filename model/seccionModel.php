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

        /*************************OBTIENE TODAS LA SECCIONES************************* */
        public function obtenerSecciones(){
            $sql = "SELECT * FROM  seccion";
            $secciones = $this->db->querySelectSecciones($sql);
            $resultado = false;
            if($secciones){
                $resultado = $secciones;
            }
            return $resultado;
        }


        /********************************HABILITAR SECCIÓN *********************************/
        /****GENERA LA QUERY PARA HABILITAR LA SECCION INDICADA POR PARÁMETRO, EL DATABASE EJECUTA LA CONSULTA */
        public function habilitarSeccion($id_seccion,$habilitado){
            $sql = "UPDATE seccion SET habilitado=? WHERE id_seccion=?";
            $seccion = $this->db->queryHabilitar($sql,$habilitado,$id_seccion);
            $resultado = false;
            if($seccion){
                $resultado = $seccion;
            }
            return $resultado;
        }


        public function guardarSeccion(){
            $sql = "INSERT INTO  seccion (id_seccion,descripcion,habilitado) VALUES(NULL,?,?)";
            $stmt = $this->db->queryInsertarSeccion($sql,$this->descripcion,0);
            $this->db->close();
            return $stmt;
        }

        public function setDescripcion($descripcion){
            $this->descripcion = $descripcion;
        }
    }

?>