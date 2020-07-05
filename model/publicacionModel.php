<?php
    include_once("helper/Database.php");

    class PublicacionModel{
        //atributos de acuerdo a los campos de la tabla en base de datos
        private $db;
        private $nombre;
        private $tipo;
        private $fechaPublicacion;
        private $numero;

        public function __construct(){
            $this->db = new Database();
        }


        public function guardarPublicacion(){
            $sql = "INSERT INTO  publicacion (id_publicacion,nombre,tipo,fecha_public,numero) VALUES(NULL,?,?,?,?)";
            $stmt = $this->db->queryInsertarPublicacion($sql,$this->nombre,$this->tipo,$this->fechaPublicacion,$this->numero);
            $this->db->close();
            return $stmt;
        }

        /*************************OBTIENE TODAS LAS PUBLICACIONES************************* */
        public function obtenerPublicaciones(){
            $sql = "SELECT * FROM  publicacion";
            $publicaciones = $this->db->querySelectPublicaciones($sql);
            $resultado = false;
            if($publicaciones){
                $resultado = $publicaciones;
            }
            return $resultado;
        }


        /********************************HABILITAR PUBLICACIÓN *********************************/
        /****GENERA LA QUERY PARA HABILITAR LA PUBLICACIÓN INDICADA POR PARÁMETRO, EL DATABASE EJECUTA LA CONSULTA */
        public function habilitarPublicacion($id_publicacion,$habilitado){
            $sql = "UPDATE publicacion SET habilitado=? WHERE id_publicacion=?";
            $publicacion = $this->db->queryHabilitar($sql,$habilitado,$id_publicacion);
            $resultado = false;
            if($publicacion){
                $resultado = $publicacion;
            }
            return $resultado;
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;
        }

        public function setTipo($tipo){
            $this->tipo = $tipo;
        }

        public function setFechaPublicacion($fechaPublicacion){
            $this->fechaPublicacion = $fechaPublicacion;
        }

        public function setNumero($numero){
            $this->numero = $numero;
        }
    }
?>