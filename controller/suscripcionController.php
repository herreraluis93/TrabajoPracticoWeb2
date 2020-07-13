<?php
    require_once 'model/suscripcionModel.php';

    class SuscripcionController{

        private $conexion;

        public function suscripcion(){
            include_once("view/suscripcion.php");
        }
        
        public function guardarSuscripcion(){
            if(isset($_POST)){
                //hacer las validaciones de input
                $suscribirseA = isset($_POST['suscribirseA']) ? $_POST['suscribirseA'] : false;
                $tipoSuscripcion = isset($_POST['tipoSuscripcion']) ? $_POST['tipoSuscripcion'] : false;
                // $numTarjeta = isset($_POST['numTarjeta']) ? $_POST['numTarjeta'] : false;
                // $inputname = isset($_POST['inputname']) ? $_POST['inputname'] : false;
                // $fecha = isset($_POST['fecha']) ? $_POST['fecha'] : false;
                // $numSeg = isset($_POST['numSeg']) ? $_POST['numSeg'] : false;

                if($suscribirseA && $tipoSuscripcion){
                    $suscripcion = new SuscripcionModel();
                    $suscripcion->setsuscribirseA($_POST['suscribirseA']);
                    $suscripcion->settipoSuscripcion($_POST['tipoSuscripcion']);
                    // $suscripcion->setnumTarjeta($_POST['numTarjeta']);
                    // $suscripcion->setinputname($_POST['inputname']);
                    // $suscripcion->setfecha($_POST['fecha']);
                    // $suscripcion->setnumSeg($_POST['numSeg']);
                    $valor = $suscripcion->guardarSuscripcion();
                    if($valor){
                        $_SESSION['suscripcionGuardada'] = true;
                    }else{
                        $_SESSION['suscripcionGuardada'] = false;
                    }
                }else{
                    $_SESSION['suscripcionGuardada'] = false;
                }

            }else{
                $_SESSION['suscripcionGuardada'] = false;
            }
            header("Location:".base_url.'suscripcion/suscripcion');
        }

    }
?>