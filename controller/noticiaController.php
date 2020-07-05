<?php
    require_once 'model/noticiaModel.php';

    class NoticiaController{

        private $conexion;

        //************************OBTIENE TODAS LAS NOTICIAS Y LAS MUESTRA PARA QUE EL ADMIN PUEDA HABILITARO DESAHABILITAR */
        public function habilitar(){
            $noticia = new NoticiaModel();
            $todasNoticias = $noticia->obtenerNoticias();
            include_once("view/habilitarNoticia.php");
        }


        /*************************HABILITA/DESABILITA LA NOTICIA QUE SE INDICA POR POST************* */
        public function habilitarNoticia(){
            $noticia = new NoticiaModel();
            $resultado = $noticia->habilitarNoticia($_POST['id_noticia'],$_POST['habilitado']);
            if($resultado){
                if($_POST['habilitado'] == 1){
                    $_SESSION['noticiaHabilitada'] = true;
                }else{
                    $_SESSION['noticiaDeshabilitada'] = true;
                }
            }else{
                if($_POST['habilitado'] == 0){
                    $_SESSION['noticiaHabilitada'] = false;
                }else{
                    $_SESSION['noticiaDeshabilitada'] = false;
                }
            }
            header("Location:".base_url.'noticia/habilitar');
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

        //*****************************OBTENER TODAS LAS NOTICIAS *******************************/


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