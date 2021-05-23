<?php

include('../config/dbConnection.php');

if(isset($_POST['guardar_project'])){

    $nombre=($_POST['nombre']);
    $direccion= $_POST['direccion'];
    $constructora= $_POST['constructora'];
    $contacto= $_POST['contacto'];

    if($nombre == ""){
        header("location:../../../ingresar.php?nombre_vacio=true&direccion=$direccion&constructora=$constructora&contacto=$contacto");
        return;
    }

    if($direccion == ""){
        header("location:../../../ingresar.php?direccion_vacio=true&nombre=$nombre&constructora=$constructora&contacto=$contacto");
        return;
    }

    if($constructora == ""){
        header("location:../../../ingresar.php?constructora_vacio=true&nombre=$nombre&direccion=$direccion&contacto=$contacto");
        return;
    }

    if($contacto == ""){
        header("location:../../../ingresar.php?contacto_vacio=true&nombre=$nombre&direccion=$direccion&constructora=$constructora");
        return;
    }

    $query="INSERT INTO proyectos(nombre,direccion,constructora,contacto) VALUES (:nombre,:direccion,:constructora,:contacto)";

    $conexion= Conexion::Conectar();
    $result = $conexion->prepare($query);
    // Setencias preparadas o Parametros de sustición para evitar la inyeeción
    $result->bindParam(':nombre', $nombre);
    $result->bindParam(':direccion', $direccion);
    $result->bindParam(':constructora', $constructora);
    $result->bindParam(':contacto', $contacto);


    

    
    if($result->execute()){
        echo 'ok';
    }else{
        echo 'Error: se ah generado un error al guardar la infomración';
    }

    header("location:../../../ingresar.php");
}
