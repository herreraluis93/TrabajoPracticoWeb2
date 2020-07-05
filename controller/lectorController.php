<?php
    require_once 'model/lectorModel.php';
    require_once 'model/noticiaModel.php';

    class LectorController{

        private $conexion;

        public function revistas(){
            $lector = new LectorModel();
            $noticia = new NoticiaModel();
            if(isset($_SESSION['usuario'])){
                $revistas = $lector->obtenerRevistas();
            }else{
                $revistas = $noticia->obtenerRevistasGratuitas();
            }

            include_once("view/revistasView.php");
        }

        public function diarios(){
            include_once("view/diariosView.php");
        }
    }
?>