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
        public function habilitarSeccion($id_noticia,$habilitado){
            $sql = "UPDATE noticia SET habilitado=? WHERE id_noticia=?";
            $noticia = $this->db->queryHabilitarNoticia($sql,$habilitado,$id_noticia);
            $resultado = false;
            if($noticia){
                $resultado = $noticia;
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