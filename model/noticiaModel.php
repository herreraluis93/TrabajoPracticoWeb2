<?php
    include_once("helper/Database.php");

    class NoticiaModel{
        //atributos de acuerdo a los campos de la tabla en base de datos
        private $db;
        private $titulo;
        private $texto;
        private $enlace;
        private $georeferencia;
        private $seccion;
        private $publicacion;
        private $usuario;

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

        public function guardar(){
            $sql = "INSERT INTO  noticia (id_noticia,titulo,texto,enlace,georeferencia,id_usuario,id_publicacion,id_seccion) VALUES(NULL,?,?,?,?,?)";
            $stmt = $this->db->queryInsertarUsuario($sql,$this->nombre,$this->apellido,$this->email,$this->password,$this->rol);
            $this->db->close();
            return $stmt;
        }
        public function setTitulo($titulo){
            $this->titulo = $titulo;
        }

        public function setTexto($texto){
            $this->texto = $texto;
        }

        public function setEnlace($enlace){
            $this->enlace = $enlace;
        }

        public function setGeoreferencia($georeferencia){
            $this->georeferencia = $georeferencia;
        }

        public function setSeccion($seccion){
            $this->seccion = $seccion;
        }

        public function setPublicacion($publicacion){
            $this->publicacion = $publicacion;
        }

        public function setIdUsuario($usuario){
            $this->usuario = $usuario;
        }

    }

?>