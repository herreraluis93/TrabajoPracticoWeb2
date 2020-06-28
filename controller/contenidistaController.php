<?php
    require_once 'model/contenidistaModel.php';
    require_once 'model/noticiaModel.php';

    class ContenidistaController{

        private $conexion;

        public function crearNoticia(){
            $noticia = new NoticiaModel();
            $secciones = $noticia->obtenerSecciones();
            $publicaciones = $noticia->obtenerPublicaciones();
            include_once("view/crearNoticia.php");
        }

        public function guardarNoticia(){
            if(isset($_POST)){
                //hacer las validaciones de input
                $titulo = isset($_POST['titulo']) ? $_POST['titulo'] : false;
                $texto = isset($_POST['texto']) ? $_POST['texto'] : false;
                $enlace = isset($_POST['enlace']) ? $_POST['enlace'] : false;
                $georeferencia = isset($_POST['georeferencia']) ? $_POST['georeferencia'] : false;
                $tipoNoticia = isset($_POST['tipoNoticia']) ? $_POST['tipoNoticia'] : false;
                $seccion = isset($_POST['seccion']) ? $_POST['seccion'] : false;
                $publicacion = isset($_POST['publicacion']) ? $_POST['publicacion'] : false;
                $imagen = true;

                if($_FILES["imagen"]["error"] > 0){
                    $imagen = false;
                    echo "error > 0";
                    die();
                }else{
                    if(file_exists("img/". $_FILES["imagen"]["name"])){
                        $imagen = false;
                        echo "error existe el archivo";
                        die();
                    }
                }

                if($titulo && $texto && $enlace && $georeferencia && $imagen && $tipoNoticia && $seccion && $publicacion){
                    $noticia = new NoticiaModel();
                    $noticia->setTitulo($_POST['titulo']);
                    $noticia->setTexto($_POST['texto']);
                    $noticia->setEnlace($_POST['enlace']);
                    $noticia->setGeoreferencia($_POST['georeferencia']);
                    $noticia->setImagen($_FILES["imagen"]["name"]);
                    $noticia->setTipoNoticia($_POST['tipoNoticia']);
                    $noticia->setSeccion($_POST['seccion']);
                    $noticia->setPublicacion($_POST['publicacion']);
                    $noticia->setIdUsuario($_SESSION['usuario']->id_usuario);
                    $valor = $noticia->guardarNoticia();
                    if($valor){
                        move_uploaded_file($_FILES["imagen"]["tmp_name"],"img/" . $_FILES["imagen"]["name"]);
                        $_SESSION['noticiaCreada'] = true;
                    }else{
                        $_SESSION['noticiaCreada'] = false;
                    }
                }else{
                    $_SESSION['noticiaCreada'] = false;
                }
            }else{
                $_SESSION['noticiaCreada'] = false;
            }
            header("Location:".base_url.'contenidista/crearNoticia');
        }


        public function guardar(){
            if(isset($_POST)){
                //hacer las validaciones de input
                $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
                $apellido = isset($_POST['apellido']) ? $_POST['apellido'] : false;
                $email = isset($_POST['email']) ? $_POST['email'] : false;
                $password = isset($_POST['password']) ? $_POST['password'] : false;

                if($nombre && $apellido && $email && $password){
                    $usuario = new UsuarioModel();
                    $usuario->setNombre($_POST['nombre']);
                    $usuario->setApellido($_POST['apellido']);
                    $usuario->setEmail($_POST['email']);
                    $usuario->setPassword($_POST['password']);
                    $usuario->setRol('lector');
                    $valor = $usuario->guardar();
                    if($valor){
                        $_SESSION['register'] = "Completo";
                    }else{
                        $_SESSION['register'] = "Fallo";
                    }
                }else{
                    $_SESSION['register'] = "Fallo";
                }

            }else{
                $_SESSION['register'] = "Fallo";
            }
            header("Location:".base_url.'usuario/registrar');
        }

        public function validarLogin(){
            if(isset($_POST)){
                //Identificar al usuario 
                //consulta a la base de datos
                $usuario = new UsuarioModel();
                $usuario->setEmail($_POST['email']);
                $usuario->setPassword($_POST['password']);
                $usuario = $usuario->login();
                if($usuario){
                    $_SESSION['usuario'] = $usuario;
                    $vistaInicio = "Location:".base_url."usuario/index";
                        header($vistaInicio);
                        exit();
                }else{
                    $_SESSION['errorLogin'] = "error";
                }
            }
            header("Location:".base_url);
        }

        public function lector(){
            include_once("view/lectorView.php");
        }

        public function login(){
            include_once("view/loginView.php");
        }

        public function logout(){
            Utils::borrarSesion('usuario');
            header("Location:".base_url);
        }
    }
?>