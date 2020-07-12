<?php
    include_once("helper/Database.php");

    class SuscripcionModel{
        //atributos de acuerdo a los campos de la tabla en base de datos
        private $db;
        private $suscribirseA;
        private $tipoSuscripcion;
        // private $numTarjeta;
        // private $inputname;
        private $fechaIni;
        private $fechaFin;
        // private $numSeg;

        public function __construct(){
            $this->db = new Database();
        }

        public function guardarSuscripcion(){
            $fechaIni= date("Y-m-d");
            if($this->tipoSuscripcion == 'Semanal'){
                $fechaFin = date("Y-m-d" , strtotime($fecha. "+ 7 days"));
            }else{
                $fechaFin = date("Y-m-d" , strtotime($fecha. "+ 30 days"));
            }
            
            $sql = "INSERT INTO suscripcion(id_suscripcion,tipo,fecha_ini,fecha_fin,suscripto_a,id_usuario) VALUES(NULL,?,?,?,?,?)";
            $stmt = $this->db->queryGuardarSuscripcion($sql,$this->tipoSuscripcion,$this->fechaIni,$this->fechaFin,$this->suscribirseA,$_SESSION['usuario']->id_usuario);
            $this->db->close();
            return $stmt;
        }

        public function setsuscribirseA($suscribirseA){
            $this->suscribirseA = $suscribirseA;
        }
        public function settipoSuscripcion($tipoSuscripcion){
            $this->tipoSuscripcion = $tipoSuscripcion;
        }
        public function setnumTarjeta($numTarjeta){
            $this->numTarjeta = $numTarjeta;
        }
        public function setinputname($inputname){
            $this->inputname = $inputname;
        }
        public function setfecha($fecha){
            $this->fecha = $fecha;
        }
        public function setnumSeg($numSeg){
            $this->numSeg = $numSeg;
        }
    }
?>