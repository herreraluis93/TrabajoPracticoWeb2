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

        //*****************************OBTIENE LAS REVISTAS HABILITADAS, SEGÚN EL NIVEL DE USUARIO**********************/
        public function revistas(){
            $noticia = new NoticiaModel();
            if(isset($_SESSION['usuario'])){
                $suscripcion = $noticia->obtenerSuscripcion($_SESSION['usuario']->id_usuario,'Revista');
                //tengo que evaluar si la fecha de fin de susc es mayor a la fecha actual o si trae suscripcion
                if($suscripcion){
                    $fecha_ini = $suscripcion[0][2];
                    $fecha_fin = $suscripcion[0][3];
                    $revistas = $noticia->obtenerRevistas($fecha_ini,$fecha_fin);
                }else{
                    $revistas = $noticia->obtenerRevistasGratuitas();                    
                }
            }else{
                $revistas = $noticia->obtenerRevistasGratuitas();
            }
            include_once("view/revistasView.php");
        }

        //*****************************OBTIENE LOS DIARIOS HABILITADOS, SEGÚN EL NIVEL DE USUARIO**********************/
        public function diarios(){
            $noticia = new NoticiaModel();
            if(isset($_SESSION['usuario'])){
                $suscripcion = $noticia->obtenerSuscripcion($_SESSION['usuario']->id_usuario,'Diario');
                //tengo que evaluar si la fecha de fin de susc es mayor a la fecha actual o si trae suscripcion
                if($suscripcion){
                    $fecha_ini = $suscripcion[0][2];
                    $fecha_fin = $suscripcion[0][3];
                    $diarios = $noticia->obtenerDiarios($fecha_ini,$fecha_fin);
                }else{
                    $diarios = $noticia->obtenerDiariosGratuitos();
                }
            }else{
                $diarios = $noticia->obtenerDiariosGratuitos();
            }
            include_once("view/diariosView.php");
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

        //**********************OBTIENE TODAS LAS NOTICIAS QUE CREÓ EL CONTENIDISTA REGISTRADO**********/
        public function misNoticias(){
            $noticia = new NoticiaModel();
            $misNoticias = $noticia->obtenerMisNoticias($_SESSION['usuario']->id_usuario);
            include_once("view/misNoticias.php");
        }
    }
?>