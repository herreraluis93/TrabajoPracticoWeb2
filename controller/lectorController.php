<?php
    require_once 'model/lectorModel.php';

    class LectorController{

        private $conexion;

        public function revistas(){
            $lector = new LectorModel();
            $revistas = $lector->obtenerRevistas();
            include_once("view/revistasView.php");
        }

        public function diarios(){
            include_once("view/diariosView.php");
        }
    }
?>