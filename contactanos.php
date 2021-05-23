<?php include("src/app/config/dbConnection.php")?>
<?php include("src/app/includes/header.php")?>




    <!-- ##### Login Area Start ##### -->
    <form method="POST" action="tabla.php" class="section-padding-100 " id="registro">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="login-content">
                        <h2>CONSTRUCTORAS</h2>
                        <h3>El Colombiano</h3>
                        <!-- Login Form -->
                        <div class="login-form">
                            <form action="#" method="post">
                                <div class="form-group">
                                    <label for="userNew" id="userRegistro">Nombre Completo</label>
                                    <input type="text" class="form-control" id="userNew" aria-describedby="emailHelp" placeholder="Ingresar Nombre Completo">
                                </div>
                                <div class="form-group">
                                    <label for="addressNew" id="directionRegistro">Dirreción</label>
                                    <input type="text" class="form-control" id="addressNew" aria-describedby="emailHelp" placeholder="Ingresar Dirreción">
                                </div>
                                <div class="form-group">
                                    <label for="buildersNew" id="telephoneRegistro">Constructora</label>
                                    <input type="text" class="form-control" id="buildersNew" aria-describedby="emailHelp" placeholder="Nombre Constructora">
                                </div>
                                <div class="form-group">
                                    <label for="contactNew" id="emailRegistro">Contacto</label>
                                    <input type="text" class="form-control" id="contactNew" aria-describedby="emailHelp" placeholder="Ingresar Contacto" maxlength="10">
                                </div>
                                <button type="submit" class="btn formulario-btn mt-30" id="buttonRegistro" onclick="registro()">Guardar</button>
                            </form>
                            <br>
                            <p>Constructora <a href="index.html"><Strong>Buscar</Strong></a></p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

<?php include("src/app/includes/footer.php")?>