<?php
    require_once 'model/publicacionModel.php';

    class PublicacionController{

        private $conexion;

        //*********OBTIENE TODAS LAS SECCIONES Y LAS MUESTRA PARA QUE EL ADMIN PUEDA HABILITAR O DESAHABILITAR */
        public function habilitar(){
            $publicacion = new PublicacionModel();
            $todasPublicaciones = $publicacion->obtenerPublicaciones();
            include_once("view/habilitarPublicacion.php");
        }


        /*************************HABILITA/DESABILITA LA PUBLICACIÓN QUE SE INDICA POR POST************* */
        public function habilitarPublicacion(){
            $publicacion = new PublicacionModel();
            $resultado = $publicacion->habilitarPublicacion($_POST['id_publicacion'],$_POST['habilitado']);

            if($resultado){
                if($_POST['habilitado'] == 1){
                    $_SESSION['publicacionHabilitada'] = true;
                }else{
                    $_SESSION['publicacionDeshabilitada'] = true;
                }
            }else{
                if($_POST['habilitado'] == 0){
                    $_SESSION['publicacionHabilitada'] = false;
                }else{
                    $_SESSION['publicacionDeshabilitada'] = false;
                }
            }
            header("Location:".base_url.'publicacion/habilitar');
        }


    }
?>