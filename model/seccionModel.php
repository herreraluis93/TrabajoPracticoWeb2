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

<<<<<<< HEAD

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


=======
>>>>>>> 43db4bb6c22977deee7bec849120a53522b2d39e
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