
<?php

    require '../config/conexion.php';

    class Project{

        public function ConsultarTodo(){
            $conexion = new Conexion();
            $stmt = $conexion->prepare("SELECT * FROM proyectos");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }

        public function ConsultarPorId($codigo_proyectos){
            $conexion = new Conexion();
            $stmt = $conexion->prepare("SELECT * FROM proyectos where codigo_proyectos = :codigo_proyectos");
            $stmt->bindValue(":codigo_proyectos", $codigo_proyectos, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_OBJ);
        }
        
        public function Guardar($nombre, $direccion, $constructora, $contacto){

            $conexion = new Conexion();
            $stmt = $conexion->prepare("INSERT INTO `proyectos`
                                                (`nombre`,
                                                `direccion`,
                                                `constructora`,
                                                `contacto`)
                                    VALUES (:nombre,
                                            :direccion,
                                            :constructora,
                                            :contacto);");
            $stmt->bindValue(":nombre", $nombre, PDO::PARAM_STR);
            $stmt->bindValue(":direccion", $direccion, PDO::PARAM_STR);
            $stmt->bindValue(":constructora", $constructora, PDO::PARAM_STR);
            $stmt->bindValue(":contacto", $contacto, PDO::PARAM_STR);

            if($stmt->execute()){
                return "OK";
            }else{
                return "Error: se ha generado un error al guardar la información";
            }

        }

        public function Modificar($codigo_proyectos, $nombre, $direccion, $constructora, $contacto){

            $conexion = new Conexion();
            $stmt = $conexion->prepare("UPDATE `proyectos`
                                        SET `nombre` = :nombre,
                                        `direccion` = :direccion,
                                        `constructora` = :constructora,
                                        `contacto` = :contacto,
                                        WHERE `codigo_proyectos` = :codigo_proyectos;");
            $stmt->bindValue(":nombre", $nombre, PDO::PARAM_STR);
            $stmt->bindValue(":direccion", $direccion, PDO::PARAM_STR);
            $stmt->bindValue(":constructora", $constructora, PDO::PARAM_STR);
            $stmt->bindValue(":contacto", $contacto, PDO::PARAM_STR);
            $stmt->bindValue(":codigo_proyectos", $codigo_proyectos, PDO::PARAM_INT);

            if($stmt->execute()){
                return "OK";
            }else{
                return "Error: se ha generado un error al modificar la información";
            }

        }

        public function Eliminar($codigo_proyectos){

            $conexion = new Conexion();
            $stmt = $conexion->prepare("DELETE FROM proyectos WHERE codigo_proyectos = :codigo_proyectos");
            $stmt->bindValue(":codigo_proyectos", $codigo_proyectos, PDO::PARAM_INT);

            if($stmt->execute()){
                return "OK";
            }else{
                return "Error: se ha generado un error al eliminar la información";
            }

        }

    }

?>