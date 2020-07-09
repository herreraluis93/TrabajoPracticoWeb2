<?php
class Utils{

    public static function borrarSesion($nombre){
        if(isset($_SESSION[$nombre])){
            $_SESSION[$nombre] = null;
            unset($_SESSION[$nombre]);
        }
        return $nombre;
    }
}
?>