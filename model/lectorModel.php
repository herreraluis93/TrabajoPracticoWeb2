<?php
    include_once("helper/Database.php");

    class LectorModel{
        //atributos de acuerdo a los campos de la tabla en base de datos
        private $db;

        public function __construct(){
            $this->db = new Database();
        }

        public function obtenerRevistas(){
            $sql = "SELECT * FROM  publicacion P JOIN noticia N ON P.id_publicacion=N.id_publicacion WHERE P.tipo='Revista'";
            $revistas = $this->db->querySelectRevistas($sql);

            $resultado = false;
            if($revistas){
                $resultado = $revistas;
            }
            return $resultado;
        }
    }

?>