<?php
    require_once 'model/lectorModel.php';

    class LectorController{

        private $conexion;

        public function revistas(){
            include_once("view/revistasView.php");
        }

        public function diarios(){
            include_once("view/diariosView.php");
        }
    }
?>