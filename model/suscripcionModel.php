<?php
    include_once("helper/Database.php");

    class SuscripcionModel{
        //atributos de acuerdo a los campos de la tabla en base de datos
        private $db;

        public function __construct(){
            $this->db = new Database();
        }
    }
?>