<?php include("src/app/config/dbConnection.php");

$objeto = new Conexion();
$conexion = $objeto->Conectar();

$consulta = "SELECT * FROM proyectos    ";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$usuarios = $resultado->fetchAll(PDO::FETCH_ASSOC);
?>
<?php include("src/app/includes/header.php") ?>


<!-- <div class="container p-5">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-body">
                <form action="src/app/models/save_task.php" method="POST">
                    <h2>Insertar Proyectos</h2>
                    <div class="form-group">
                        <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre del proyecto" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="direccion" id="direccion" class="form-control" placeholder="Ubicación del proyecto">
                    </div>
                    <div class="form-group">
                        <input type="text" name="constructora" id="constructora" class="form-control" placeholder="Nombre de la constructora" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="contacto" id="contacto" class="form-control" placeholder="Número contacto">
                    </div>
                    <input type="submit" class="btn btn-dark btn-block" name="guardar_project" value="Insertar">
                </form>
            </div>
        </div>
    </div>
</div> -->


<div class="container">
    <div class="card">
        <div class="card-header bg-dark">
            <h3 class="text-white text-uppercase d-flex justify-content-center">Insertar  proyecto de construcción</h3>
        </div>
        <form action="src/app/models/save_task.php" method="POST">
            <div class="card-body">
                <input type="hidden" name="codigo_proyectos" id="codigo_proyectos">
                <div class="row">
                    <div class="col-md-6">
                        <label for="nombre">Nombre:</label>
                        <input class="form-control" type="text" name="nombre" id="nombre" placeholder="Nombre del proyecto" autofocus min="6" max="" value="<?php echo isset($_GET['nombre']) && $_GET['nombre'] !== '' ? $_GET['nombre'] : ''; ?>">
                         <?php if(isset($_GET['nombre_vacio']) && $_GET['nombre_vacio']): ?><span style="color: red;">Completa este campo.</span><?php endif; ?>
                    </div>
                    <div class="col-md-6">
                        <label for="direccion">Ubicación:</label>
                        <input class="form-control" type="text" name="direccion" id="direccion" placeholder="Ubicación del proyecto" min="6" max="" value="<?php echo isset($_GET['direccion']) && $_GET['direccion'] !== '' ? $_GET['direccion'] : ''; ?>">
                         <?php if(isset($_GET['direccion_vacio']) && $_GET['direccion_vacio']): ?><span style="color: red;">Completa este campo.</span><?php endif; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="constructora">Constructora:</label>
                        <input class="form-control" type="text" name="constructora" id="constructora" placeholder="Nombre de la constructora" autofocus min="6" max="" value="<?php echo isset($_GET['constructora']) && $_GET['constructora'] !== '' ?  $_GET['constructora'] : ''; ?>">
                         <?php if(isset($_GET['constructora_vacio']) && $_GET['constructora_vacio']): ?><span style="color: red;">Completa este campo.</span><?php endif; ?>
                    </div>
                    <div class="col-md-6">
                        <label for="contacto">Contacto</label>
                        <input class="form-control" type="number" name="contacto" id="contacto" placeholder="Número contacto"  value="<?php echo isset($_GET['contacto']) && $_GET['contacto'] !== '' ?  $_GET['contacto'] : ''; ?>">
                         <?php if(isset($_GET['contacto_vacio']) && $_GET['contacto_vacio']): ?><span style="color: red;">Completa este campo.</span><?php endif; ?>
                    </div>
                </div>

                <div></div>
                <div class="row d-flex justify-content-center mt-3">
                    <input type="submit" class="btn btn-dark btn-block" name="guardar_project" value="Insertar">
                </div>
            </div>
            <div class="card-footer">
                <table class="table table-striped table-hover table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Codigo proyecto</th>
                            <th>Nombre</th>
                            <th>Direccion</th>
                            <th>Constructora</th>
                            <th>Contacto</th>
                            <th>Fecha de Ingreso</th>
                        </tr>
                    </thead>
                    <tbody class="">
                        <?php foreach ($usuarios as $usuario) { ?>
                            <tr>
                                <td><?php echo $usuario['codigo_proyectos'] ?></td>
                                <td><?php echo $usuario['nombre'] ?></td>
                                <td><?php echo $usuario['direccion'] ?></td>
                                <td><?php echo $usuario['constructora'] ?></td>
                                <td><?php echo $usuario['contacto'] ?></td>
                                <td><?php echo $usuario['data_create'] ?></td>
                                <td>
                                    <a class="mr-1 btn btn-success" href="src/app/models/edit.php?id=<?php echo $usuario['codigo_proyectos']?>">
                                        <i class="fas fa-marker"></i>
                                    </a>
                                    <a class="mr-1 btn btn-danger" href="src/app/models/delete.php?id=<?php echo $usuario['codigo_proyectos']?>">  
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

        </form>
    </div>
</div>


<?php include("src/app/includes/footer.php") ?>