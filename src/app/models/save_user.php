<?php

include('../config/dbConnection.php');

if(isset($_POST['enviar'])){

    $nombre=($_POST['nombre']);
    $telefono= $_POST['telefono'];
    $email= $_POST['email'];
    $codigo= $_POST['codigo'];

    if($nombre == ""){
        header("location:../../../contactanos.php?nombre_vacio=true&telefono=$telefono&email=$email&codigo=$codigo");
        return;
    }

    if($telefono == ""){
        header("location:../../../contactanos.php?telefono_vacio=true&nombre=$nombre&email=$email&codigo=$codigo");
        return;
    }

    if($email == ""){
        header("location:../../../contactanos.php?email_vacio=true&nombre=$nombre&telefono=$telefono&codigo=$codigo");
        return;
    }

    if($codigo == ""){
        header("location:../../../contactanos.php?codigo_vacio=true&nombre=$nombre&telefono=$telefono&email=$email");
        return;
    }

    $query="INSERT INTO users(nombre,telefono,email,codigo) VALUES (:nombre,:telefono,:email,:codigo)";

    $conexion= Conexion::Conectar();
    $result = $conexion->prepare($query);
    // Setencias preparadas o Parametros de sustición para evitar la inyeeción
    $result->bindParam(':nombre', $nombre);
    $result->bindParam(':telefono', $telefono);
    $result->bindParam(':email', $email);
    $result->bindParam(':codigo', $codigo);


    

    
    if($result->execute()){
        echo 'ok';
    }else{
        echo 'Error: se ah generado un error al guardar la infomración';
    }

    header("location:../../../contactanos.php");
}
