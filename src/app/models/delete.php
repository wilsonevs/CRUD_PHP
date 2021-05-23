<?php

include('../config/dbConnection.php');

if (isset($_GET['id'])) {

    $codigoProyectos = $_GET['id'];
    $query = "DELETE FROM proyectos WHERE codigo_proyectos= $codigoProyectos";
    $conexion = Conexion::Conectar();
    $result = $conexion->prepare($query);
    $result->execute();

    if (!$result) {
        die("Query failed");
    }

    $_SESSION["message"] =   'Task remover success';
    $_SESSION["message_type"] =   'Peligro';


    header("location:../../../ingresar.php");
}


?>

