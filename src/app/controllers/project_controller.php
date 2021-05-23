<?php

require "../models/project_model.php";

if ($_POST) {
    $project = new Project();

    switch ($_POST["accion"]) {
        case 'CONSULTAR':
            echo json_encode($project->ConsultarTodo());
            break;
        case 'CONSULTAR_ID':
            echo json_encode($persona->ConsultarPorId($_POST["codigo_proyectos"]));
            break;
        case 'GUARDAR':
            $nombre = $_POST["nombre"];
            $direccion = $_POST["direccion"];
            $constructora = $_POST["constructora"];
            $contacto = $_POST["contacto"];

            if($nombre == ""){
                echo json_encode("Debe ingresar los nombre del proyecto");
                return;
            }

            if($direccion == ""){
                echo json_encode("Debe ingresar la direccion");
                return;
            }

            if($constructora == ""){
                echo json_encode("Debe ingresar nombre de la constructora");
                return;
            }

            if($contacto == ""){
                echo json_encode("Debe ingresar la contacto de la persona");
                return;
            }

            $respuesta = $project->Guardar($nombre, $direccion, $constructora, $contacto);
            echo json_encode($respuesta);
            break;
        case 'MODIFICAR':
            $nombre = $_POST["nombre"];
            $direccion = $_POST["direccion"];
            $constructora = $_POST["constructora"];
            $contacto = $_POST["contacto"];
            $codigo_proyectos = $_POST["codigo_proyectos"];

            if($nombre == ""){
                echo json_encode("Debe ingresar los nombre del proyecto");
                return;
            }

            if($direccion == ""){
                echo json_encode("Debe ingresar la direccion");
                return;
            }

            if($constructora == ""){
                echo json_encode("Debe ingresar nombre de la constructora");
                return;
            }

            if($contacto == ""){
                echo json_encode("Debe ingresar la contacto de la persona");
                return;
            }
            
            $respuesta = $project->Modificar($codigo_proyectos ,$nombre, $direccion, $constructora, $contacto);
            echo json_encode($respuesta);
            break;
        case 'ELIMINAR':
            $codigo_proyectos = $_POST["codigo_proyectos"];
            $respuesta = $project->Eliminar($codigo_proyectos);
            echo json_encode($respuesta);
            break;
    }
}
