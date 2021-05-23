<?php

include('../config/dbConnection.php');

if (isset($_GET['id'])) {

    $codigoProyectos = $_GET['id'];
    $query = "SELECT * FROM proyectos WHERE codigo_proyectos= $codigoProyectos";
    $conexion = Conexion::Conectar();
    $result = $conexion->prepare($query);
    $result->execute();
    $usuarios = $result->fetch(PDO::FETCH_ASSOC);
}

if (isset($_POST['update'])) {
    $codigo_proyectos = $_GET['id'];
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $constructora = $_POST['constructora'];
    $contacto = $_POST['contacto'];

    



    $query = "UPDATE proyectos SET nombre= '$nombre', direccion= '$direccion', constructora= '$constructora', contacto= $contacto WHERE codigo_proyectos =$codigo_proyectos";
    $conexion = Conexion::Conectar();
    $result = $conexion->prepare($query);
    $result->execute();

    header("location: edit.php?id=$codigo_proyectos");
}
?>


<?php include("../includes/header.php") ?>

<div class="container">
    <div class="card">
        <div class="card-header bg-dark">
            <h3 class="text-white text-uppercase d-flex justify-content-center">Insertar proyecto de construcción</h3>
        </div>
        <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
            <div class="card-body">
                <input type="hidden" name="codigo_proyectos" id="codigo_proyectos">
                <div class="row">
                    <div class="col-md-6">
                        <label for="nombre">Nombre:</label>
                        <input class="form-control" type="text" name="nombre" id="nombre" placeholder="Nombre del proyecto" min="6" max="" required value="<?php echo $usuarios['nombre']; ?>" autofocus>
                    </div>
                    <div class="col-md-6">
                        <label for="direccion">Ubicación:</label>
                        <input class="form-control" type="text" name="direccion" id="direccion" placeholder="Ubicación del proyecto" min="6" max="" required value="<?php echo $usuarios['direccion']; ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="constructora">Constructora:</label>
                        <input class="form-control" type="text" name="constructora" id="constructora" placeholder="Nombre de la constructora" min="6" max="" required value="<?php echo $usuarios['constructora']; ?>" autofocus>
                    </div>
                    <div class="col-md-6">
                        <label for="contacto">Contacto</label>
                        <input class="form-control" type="number" name="contacto" id="contacto" placeholder="Número contacto" min="7" max="10" required value="<?php echo $usuarios['contacto']; ?>" >
                    </div>
                    <button class="btn btn-success" name="update">
                        Update
                    </button>
                </div>
        </form>
    </div>
</div>


<?php include("../includes/footer.php") ?>