<?php

session_start();

class Conexion{	  
    public static function Conectar() {        
        $dsn = 'mysql:dbname=constructoras;host=localhost';
        $usuario = 'root';
        $contraseña = '';

        // Corregir problemas de compatibilidad de los diferentes textos
        $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');			
        try{
            $conn = new PDO($dsn, $usuario, $contraseña, $opciones);			
            return $conn;
        }catch (Exception $e){
            die("El error de Conexión es: ". $e->getMessage());
        }
    }
}

?>