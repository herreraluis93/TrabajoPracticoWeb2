<?php
    include_once("helper/Database.php");

    class NoticiaModel{
        //atributos de acuerdo a los campos de la tabla en base de datos
        private $db;
        private $titulo;
        private $texto;
        private $enlace;
        private $georeferencia;
        private $imagen;
        private $tipoNoticia;
        private $seccion;
        private $publicacion;
        private $usuario;
        private $habilitado;

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

        /************************************OBTIENE TODAS LAS PUBLICACIONES ***********************/
        public function obtenerPublicaciones(){
            $sql = "SELECT * FROM  publicacion";
            $secciones = $this->db->querySelectSecciones($sql);
            $resultado = false;
            if($secciones){
                $resultado = $secciones;
            }
            return $resultado;
        }

        /***********************************OBTIENE TODAS LAS NOTICIAS ******************************/
        public function obtenerNoticias(){
            $sql = "SELECT N.id_noticia, N.titulo, U.nombre, U.apellido, N.habilitado FROM  noticia N JOIN usuario U ON N.id_usuario=U.id_usuario";
            $noticias = $this->db->querySelectNoticias($sql);
            $resultado = false;
            if($noticias){
                $resultado = $noticias;
            }
            return $resultado;
        }


        /********************************HABILITAR NOTICIA *********************************/
        public function habilitarNoticia($id_noticia,$habilitado){
            $sql = "UPDATE noticia SET habilitado=? WHERE id_noticia=?";
            $noticia = $this->db->queryHabilitarNoticia($sql,$habilitado,$id_noticia);
            $resultado = false;
            if($noticia){
                $resultado = $noticia;
            }
            return $resultado;
        }

        public function guardarNoticia(){
            $sql = "INSERT INTO  noticia (id_noticia,titulo,texto,enlace,georeferencia,imagenes,tipo,id_usuario,id_publicacion,id_seccion,habilitado) VALUES(NULL,?,?,?,?,?,?,?,?,?,?)";
            $stmt = $this->db->queryInsertarNoticia($sql,$this->titulo,$this->texto,$this->enlace,$this->georeferencia,$this->imagen,$this->tipoNoticia,$this->usuario,$this->publicacion,$this->seccion,true);
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

        public function setTipoNoticia($tipoNoticia){
            $this->tipoNoticia = $tipoNoticia;
        }

        public function setImagen($imagen){
            $this->imagen = $imagen;
        }
    }

?>