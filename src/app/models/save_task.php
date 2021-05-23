<?php

include('../config/dbConnection.php');

if(isset($_POST['guardar_project'])){

    $nombre=($_POST['nombre']);
    $direccion= $_POST['direccion'];
    $email= $_POST['email'];
    $contacto= $_POST['contacto'];

    $query="INSERT INTO proyectos(nombre,direccion,constructora,contacto) VALUES (:nombre,:direccion,:email,:contacto)";

    $conexion= Conexion::Conectar();
    $result = $conexion->prepare($query);
    // Setencias preparadas o Parametros de sustición para evitar la inyeeción
    $result->bindParam(':nombre', $nombre);
    $result->bindParam(':direccion', $direccion);
    $result->bindParam(':email', $email);
    $result->bindParam(':contacto', $contacto);
    
    if($result->execute()){
        echo 'ok';
    }else{
        echo 'Error: se ah generado un error al guardar la infomración';
    }

    header("location:../../../ingresar.php");
}
