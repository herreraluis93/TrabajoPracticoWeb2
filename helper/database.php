<?php

class Database{

    private $conexion;

    public function __construct(){
        $configuracion = parse_ini_file("config/config.ini");
        $servername = $configuracion["servername"];
        $username = $configuracion["username"];
        $dbname =  $configuracion["dbname"];
        $password =  $configuracion["password"];

        $conn = new mysqli($servername,$username,$password,$dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $this->conexion = $conn;
    }

    public function queryInsertarUsuario($sql,$nombre,$apellido,$email,$pass,$rol){        
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param("sssss",$nombre,$apellido,$email,$pass,$rol);
        $resultado = $stmt->execute();
        $stmt->close();
        return $resultado;
    }

    public function querySelectUsuario($sql,$email,$password){
        
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param("ss",$email,$password);
        $stmt->execute();

        //guardo el resultado en un objeto mysqli_result
        $usuario = $stmt->get_result();
        if($usuario->num_rows == 1){
            $resultado = $usuario->fetch_object();
        }else{
            $resultado = false;
        }

        $stmt->close();
        return $resultado;
      }

      public function querySelectSecciones($sql){
        
        $stmt = $this->conexion->prepare($sql);
        $stmt->execute();

        //guardo el resultado en un objeto mysqli_result
        $usuario = $stmt->get_result();
        if($usuario->num_rows != 0){
            $resultado = $usuario->fetch_all(MYSQLI_NUM);
        }else{
            $resultado = false;
        }

        $stmt->close();
        return $resultado;
      }

    public function querySelectPublicaciones($sql){
        
        $stmt = $this->conexion->prepare($sql);
        $stmt->execute();

        //guardo el resultado en un objeto mysqli_result
        $usuario = $stmt->get_result();
        if($usuario->num_rows != 0){
            $resultado = $usuario->fetch_all(MYSQLI_NUM);
        }else{
            $resultado = false;
        }
    }

    public function queryInsertarNoticia($sql,$titulo,$texto,$enlace,$georeferencia,$usuario,$seccion,$publicacion){
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param("ssssiii",$titulo,$texto,$enlace,$georeferencia,$usuario,$seccion,$publicacion);
        $resultado = $stmt->execute();
        $stmt->close();
        return $resultado;

        $stmt->close();
        return $resultado;
      }

    public function close(){
        $this->conexion->close();
    }
}