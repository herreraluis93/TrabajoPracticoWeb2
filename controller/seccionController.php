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

        //*********OBTIENE TODAS LAS SECCIONES Y LAS MUESTRA PARA QUE EL ADMIN PUEDA HABILITAR O DESAHABILITAR */
        public function habilitar(){
            $seccion = new SeccionModel();
            $todasSecciones = $seccion->obtenerSecciones();
            include_once("view/habilitarSeccion.php");
        }


        /*************************HABILITA/DESABILITA LA SECCION QUE SE INDICA POR POST************* */
        public function habilitarSeccion(){
            $seccion = new SeccionModel();
            $resultado = $seccion->habilitarSeccion($_POST['id_seccion'],$_POST['habilitado']);
            if($resultado){
                if($_POST['habilitado'] == 1){
                    $_SESSION['seccionHabilitada'] = true;
                }else{
                    $_SESSION['seccionDeshabilitada'] = true;
                }
            }else{
                if($_POST['habilitado'] == 0){
                    $_SESSION['seccionHabilitada'] = false;
                }else{
                    $_SESSION['seccionDeshabilitada'] = false;
                }
            }
            header("Location:".base_url.'seccion/habilitar');
        }


    }
?>