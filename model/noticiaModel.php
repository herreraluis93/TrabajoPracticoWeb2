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
            $sql = "SELECT * FROM  seccion WHERE habilitado = 1";
            $secciones = $this->db->querySelectSecciones($sql);
            $resultado = false;
            if($secciones){
                $resultado = $secciones;
            }
            return $resultado;
        }

        /************************************OBTIENE TODAS LAS PUBLICACIONES ***********************/
        public function obtenerPublicaciones(){
            $sql = "SELECT * FROM  publicacion WHERE habilitado = 1";
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

        /*****************OBTIENE TODAS LAS NOTICIAS DE LA SECCIÓN INFORMADA POR PARÁMETRO ******************************/
        public function obtenerNoticiasPorSeccion(){
            $sql = "SELECT * FROM  noticia N JOIN publicacion P ON P.id_publicacion=N.id_publicacion WHERE N.tipo='G' AND N.habilitado=1 AND P.tipo='Revista'";
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
            $noticia = $this->db->queryHabilitar($sql,$habilitado,$id_noticia);
            $resultado = false;
            if($noticia){
                $resultado = $noticia;
            }
            return $resultado;
        }

        /*************OBTENER LA SUSCRIPCION A DIARIO O REVISTA QUE TIENE EL LECTOR****************/
        public function obtenerSuscripcion($id_usuario,$suscripto_a){
            $sql = "SELECT * FROM suscripcion S WHERE S.suscripto_a='$suscripto_a' AND S.id_usuario=$id_usuario ORDER BY fecha_fin DESC LIMIT 1";
            $suscripcion = $this->db->querySelectSuscripcion($sql);
            $resultado = array();
            if($suscripcion){
                $resultado = $suscripcion;
            }
            return $resultado;
        }

        /********************************OBTENER NOTICIAS GRATUITAS DE LAS REVISTAS****************/
        public function obtenerRevistasGratuitas(){
            $sql = "SELECT * FROM  noticia N JOIN publicacion P ON P.id_publicacion=N.id_publicacion WHERE N.tipo='G' AND N.habilitado=1 AND P.tipo='Revista'";
            $noticias = $this->db->querySelectNoticias($sql);
            $resultado = array();
            if($noticias){
                $resultado = $noticias;
            }
            return $resultado;
        }

        /********************************OBTENER NOTICIAS PAGAS DE LAS REVISTAS****************/
        public function obtenerRevistas($fecha_ini,$fecha_fin){
            $sql = "SELECT * FROM  noticia N JOIN publicacion P ON P.id_publicacion=N.id_publicacion WHERE N.habilitado=1 AND P.tipo='Revista' AND P.habilitado=1 AND P.fecha_public>='$fecha_ini' AND P.fecha_public<'$fecha_fin'";
            $noticias = $this->db->querySelectNoticias($sql);
            $resultado = array();
            if($noticias){
                $resultado = $noticias;
            }
            return $resultado;
        }

        /********************************OBTENER NOTICIAS GRATUITAS DE LAS DIARIOS****************/
        public function obtenerDiariosGratuitos(){
            $sql = "SELECT * FROM  noticia N JOIN publicacion P ON P.id_publicacion=N.id_publicacion WHERE N.tipo='G' AND N.habilitado=1 AND P.tipo='Diario'";
            $noticias = $this->db->querySelectNoticias($sql);
            $resultado = array();
            if($noticias){
                $resultado = $noticias;
            }
            return $resultado;
        }

        /********************************OBTENER NOTICIAS PAGAS DE LAS DIARIOS****************/
        public function obtenerDiarios($fecha_ini,$fecha_fin){
            $sql = "SELECT * FROM  noticia N JOIN publicacion P ON P.id_publicacion=N.id_publicacion WHERE N.habilitado=1 AND P.tipo='Diario' AND P.habilitado=1 AND P.fecha_public>='$fecha_ini' AND P.fecha_public<'$fecha_fin'";
            $noticias = $this->db->querySelectNoticias($sql);
            $resultado = array();
            if($noticias){
                $resultado = $noticias;
            }
            return $resultado;
        }

        public function guardarNoticia(){
            $sql = "INSERT INTO  noticia (id_noticia,titulo,texto,enlace,georeferencia,imagenes,tipo,id_usuario,id_publicacion,id_seccion,habilitado) VALUES(NULL,?,?,?,?,?,?,?,?,?,?)";
            $stmt = $this->db->queryInsertarNoticia($sql,$this->titulo,$this->texto,$this->enlace,$this->georeferencia,$this->imagen,$this->tipoNoticia,$this->usuario,$this->publicacion,$this->seccion,0);
            $this->db->close();
            return $stmt;
        }

        /*******OBTIENE TODAS LAS NOTICIAS DEL ID DE USUARIO(CONTENIDISTA) QUE SE RECIBE POR PARÁMETRO*** */
        public function obtenerMisNoticias($id){
            $sql = "SELECT N.titulo, P.tipo, P.fecha_public, P.numero, S.descripcion, N.habilitado, N.id_noticia FROM  noticia N JOIN publicacion P ON P.id_publicacion=N.id_publicacion JOIN seccion S ON N.id_seccion=S.id_seccion WHERE N.id_usuario=$id";
            $stmt = $this->db->querySelectNoticias($sql);
            $this->db->close();
            return $stmt;
        }

        /*******OBTIENE DE LA BASE DE DATOS, LA NOTICIA QUE SE PIDE POR PARÁMETRO*** */
        public function obtenerNoticia($id){
            $sql = "SELECT * FROM noticia N WHERE N.id_noticia=$id";
            $stmt = $this->db->querySelectNoticias($sql);
            $this->db->close();
            return $stmt;
        }

        /********************************************************************************** */
        public function actualizarNoticia($id_noticia){
            $sql = "UPDATE noticia SET titulo=?, texto=?, enlace=?, georeferencia=?, imagenes=?, tipo=?, id_publicacion=?, id_seccion=?, habilitado=0 WHERE id_noticia='$id_noticia'";
            $stmt = $this->db->queryActualizarNoticia($sql,$this->titulo,$this->texto,$this->enlace,$this->georeferencia,$this->imagen,$this->tipoNoticia,$this->publicacion,$this->seccion);
            $this->db->close();
            return $stmt;
        }

        /********************************OBTENER NOTICIAS GRATUITAS DE LA SECCION CORRESPONDIENTE****************/
        public function obtenerNoticiasGratuitasPorSeccion($idSeccion){
            $sql = "SELECT * FROM  noticia WHERE id_seccion=$idSeccion AND tipo='G'";
            $noticias = $this->db->querySelectNoticias($sql);
            $resultado = array();
            if($noticias){
                $resultado = $noticias;
            }
            return $resultado;
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