<?php include("src/app/config/dbConnection.php");

$objeto = new Conexion();
$conexion = $objeto->Conectar();

$consulta = "SELECT * FROM proyectos";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$usuarios = $resultado->fetchAll(PDO::FETCH_ASSOC);
?>
<?php include("src/app/includes/header.php") ?>


<div class="section-padding-100 login-content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
               <div class="table-responsive">
               <table id="verTableUsuario" class="table table-striped table-hover table-bordered" style="width:100%">
                    <thead class="text-center thead-dark">
                        <th>Codigo proyectos</th>
                        <th>Nombre </th>
                        <th>Direccion</th>
                        <th>Constructora</th>
                        <th>contacto</th>
                        <th>Fecha</th>
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
                            </tr>
                        <?php  }  ?>
                    </tbody>
                </table>

               </div>
            </div>
        </div>
    </div>
</div>




<?php include("src/app/includes/footer.php") ?>