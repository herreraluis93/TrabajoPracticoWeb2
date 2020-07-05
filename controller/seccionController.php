<?php
    require_once 'model/seccionModel.php';

    class SeccionController{

        private $conexion;

        public function crearSeccion(){
            $seccion = new SeccionModel();
            $secciones = $seccion->obtenerSecciones();
            include_once("view/crearSeccion.php");
        }

        public function guardarSeccion(){
            if(isset($_POST)){
                //hacer las validaciones de input
                $nuevaSeccion = isset($_POST['seccion']) ? $_POST['seccion'] : false;

                if($nuevaSeccion){
                    $seccion = new SeccionModel();
                    $seccion->setDescripcion($nuevaSeccion);
                    $valor = $seccion->guardarSeccion();
                    if($valor){
                        $_SESSION['seccionCreada'] = true;
                    }else{
                        $_SESSION['seccionCreada'] = false;
                    }
                }else{
                    $_SESSION['seccionCreada'] = false;
                }
            }else{
                $_SESSION['seccionCreada'] = false;
            }
            header("Location:".base_url.'seccion/crearSeccion');
        }

    }
?>