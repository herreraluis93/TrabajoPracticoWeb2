<?php
    include_once("helper/Database.php");

    class UsuarioModel{
        //atributos de acuerdo a los campos de la tabla en base de datos
        private $id;
        private $nombre;
        private $apellido;
        private $email;
        private $password;
        private $rol;
        private $db;

        public function __construct(){
            $this->db = new Database();
        }

        public function guardar(){
            $sql = "INSERT INTO  usuario (id_usuario,nombre,apellido,email,password,rol) VALUES(NULL,?,?,?,?,?)";
            $stmt = $this->db->queryInsertarUsuario($sql,$this->nombre,$this->apellido,$this->email,$this->password,$this->rol);
            $this->db->close();
            return $stmt;
        }

        public function login(){
            //Comprobar si existe el usuario
            $email = $this->getEmail();
            $password = $this->getPassword();
            $sql = "SELECT * FROM  usuario WHERE email = ? AND password = ?";
            $usuario = $this->db->querySelectUsuario($sql,$email,$password);
            $resultado = false;
            //Verifico si el usuario tiene el objeto usuario o false
            if($usuario){
                $resultado = $usuario;
            }else{
                $resultado = false;
            }
            return $resultado;
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;
        }

        public function setApellido($apellido){
            $this->apellido = $apellido;
        }

        public function setEmail($email){
            $this->email = $email;
        }

        public function setPassword($password){
            $this->password = md5($password);
        }

        public function setRol($rol){
            $this->rol = $rol;
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function getApellido(){
            return $this->apellido;
        }

        public function getEmail(){
            return $this->email;
        }

        public function getPassword(){
            return $this->password;
        }

        public function getRol(){
            return $this->rol;
        }
    }

?>