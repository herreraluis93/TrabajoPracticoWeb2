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

      
      //****************************SELECCIONA TODAS LAS SECCIONES*********************************
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


    //******************************SELECCIONA TODAS LAS PUBLICACIONES**************************************
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
        return $resultado;
    }

    //******************************EJECUTA EL SQL PARA OBTENER TODAS LAS NOTICIAS**************************************
    public function querySelectNoticias($sql){
        
        $stmt = $this->conexion->prepare($sql);
        $stmt->execute();
    
        //guardo el resultado en un objeto mysqli_result
        $usuario = $stmt->get_result();
        if($usuario->num_rows != 0){
            $resultado = $usuario->fetch_all(MYSQLI_NUM);
        }else{
            $resultado = false;
        }
        return $resultado;
    }

    //*********************************INSERTA UNA NUEVA NOTICIA*************************************
    public function queryInsertarNoticia($sql,$titulo,$texto,$enlace,$georeferencia,$imagen,$tipoNoticia,$usuario,$publicacion,$seccion,$habilitado){
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param("ssssssiiii",$titulo,$texto,$enlace,$georeferencia,$imagen,$tipoNoticia,$usuario,$publicacion,$seccion,$habilitado);
        $resultado = $stmt->execute();
        $stmt->close();
        return $resultado;
      }

    //*********************************UPDATE DE HABILITAR, DEHABILITAR NOTICIA*************************************
    //************SE UTILIZA PARA EJECUTAR LA QUERY DE HABILITAR O DESHABILITAR SECCIÓN,NOTICIA O PUBLICACIÓN */
    public function queryHabilitar($sql,$habilitado,$id){
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param("si",$habilitado,$id);
        $resultado = $stmt->execute();
        $stmt->close();
        return $resultado;
    }
    
    //**********************INSERTA UNA NUEVA PUBLICACIÓN*******************************************
    public function queryInsertarPublicacion($sql,$nombre,$tipo,$fechaPublicacion,$numero,$habilitado){
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param("sssii",$nombre,$tipo,$fechaPublicacion,$numero,$habilitado);
        $resultado = $stmt->execute();
        $stmt->close();
        return $resultado;
    }

    //********************OBTENER REVISTAS DE LA TABLA DE BASE DE DATOS******************************/
    public function querySelectRevistas($sql){
        $stmt = $this->conexion->prepare($sql);
        $stmt->execute();

        //guardo el resultado en un objeto mysqli_result
        $usuario = $stmt->get_result();
        if($usuario->num_rows != 0){
            $resultado = $usuario->fetch_all(MYSQLI_NUM);
        }else{
            $resultado = false;
        }
        return $resultado;
    }

    //****************************INSERTA UNA NUEVA SECCIÓN*******************************************/
    public function queryInsertarSeccion($sql,$descripcion){
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param("s",$descripcion);
        $resultado = $stmt->execute();
        $stmt->close();
        return $resultado;
    }

    public function close(){
        $this->conexion->close();
    }
}