<?php
    require_once 'model/usuarioModel.php';

    class UsuarioController{

        private $conexion;

        public function index(){
            $vista = "view/indexView.php";
            	if(isset($_SESSION['usuario'])){
                	$vista = "view/inicio" . $_SESSION['usuario']->rol . ".php";
            }
            include_once($vista);
        }

        public function registrar(){
            include_once("view/registroView.php");
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

        public function revistas(){
            include_once("view/revistasView.php");
        }

        public function diarios(){
            include_once("view/diariosView.php");
        }
    }
?>