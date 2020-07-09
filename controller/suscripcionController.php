<?php
    require_once 'model/suscripcionModel.php';

    class SuscripcionController{

        private $conexion;

        public function suscripcion(){
            include_once("view/suscripcion.php");
        }
        

    }
?>