<?php include("src/app/config/dbConnection.php")?>
<?php include("src/app/includes/header.php")?>


<div class="container p-5">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-body">
                <form action="src/app/views/save_task.php" method="POST">
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
</div>


<div class="container">
    <div class="card">
        <div class="card-header bg-dark">
            <h3 class="text-white text-uppercase d-flex justify-content-center">Gestionar proyecto de construcción</h3>
        </div>
        <div class="card-body">
            <input type="hidden" name="codigo_proyectos" id="codigo_proyectos">
            <div class="row">
                <div class="col-md-6">
                    <label for="nombre">Nombre:</label>
                    <input class="form-control" type="text" name="nombre" id="nombre" placeholder="Nombre del proyecto" autofocus>
                </div>
                <div class="col-md-6">
                    <label for="direccion">Ubicación:</label>
                    <input class="form-control" type="text" name="direccion" id="direccion" placeholder="Ubicación del proyecto">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="constructora">Constructora:</label>
                    <input class="form-control" type="text" name="constructora" id="constructora" placeholder="Nombre de la constructora" autofocus>
                </div>
                <div class="col-md-6">
                    <label for="contacto">Contacto</label>
                    <input class="form-control" type="text" name="contacto" id="contacto" placeholder="Número contacto">
                </div>
            </div>

            <div></div>
            <div class="row d-flex justify-content-center mt-3">
            <input type="submit" class="btn btn-dark btn-block" name="guardar_project" value="Insertar">
            </div>
        </div>
        <div class="card-footer">
            <table class="table table-striped">
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
                <tbody id="datos" name="datos">

                </tbody>
            </table>
        </div>
    </div>
</div>


<?php include("src/app/includes/footer.php") ?>