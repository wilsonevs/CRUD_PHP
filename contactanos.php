<?php include("src/app/config/dbConnection.php")?>
<?php include("src/app/includes/header.php")?>




    <!-- ##### Login Area Start ##### -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="login-content">
                        <h2>CONSTRUCTORAS</h2>
                        <h3>El Colombiano</h3>
                        <!-- Login Form -->
                        <div class="login-form">
                            <form action="src/app/models/save_user.php" method="POST">
                                <div class="form-group">
                                    <label for="nombre" >Nombre Completo</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="emailHelp" placeholder="Ingresar Nombre Completo" min="6" max="" required>
                                    <?php if(isset($_GET['nombre_vacio']) && $_GET['nombre_vacio']): ?><span style="color: red;">Completa este campo.</span><?php endif; ?>
                                </div>
                                <div class="form-group">
                                    <label for="telefono" id="directionRegistro">Teléfono</label>
                                    <input type="number" class="form-control" id="telefono" name="telefono" aria-describedby="emailHelp" placeholder="Ingresar Teléfono" min="6" max="" required>
                                    <?php if(isset($_GET['telefono_vacio']) && $_GET['telefono_vacio']): ?><span style="color: red;">Completa este campo.</span><?php endif; ?>
                                </div>
                                <div class="form-group">
                                    <label for="email" >Email</label>
                                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Ingresar Correo eletronico"  required>
                                    <?php if(isset($_GET['email_vacio']) && $_GET['email_vacio']): ?><span style="color: red;">Completa este campo.</span><?php endif; ?>
                                </div>
                                <div class="form-group">
                                    <label for="codigo" >Codigo del proyecto</label>
                                    <input type="text" class="form-control" id="codigo" name="codigo" aria-describedby="emailHelp" placeholder="Codigo del proyecto" min="4" max="6" required>
                                    <?php if(isset($_GET['codigo_vacio']) && $_GET['codigo_vacio']): ?><span style="color: red;">Completa este campo.</span><?php endif; ?>
                                </div>
                                
                                <button type="submit" class="btn formulario-btn mt-30" id="enviar" name="enviar">Enviar</button>
                            </form>
                            <br>
                            <p>Buscar más <a href="/Prueba_colombiano/index.php"><Strong>Proyectos</Strong></a></p>

                        </div>
                    </div>
                </div>
            </div>
        </div>


<?php include("src/app/includes/footer.php")?>