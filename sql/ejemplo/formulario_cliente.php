<?php
include("conexión.php");
$con = connection();

$sql = "SELECT * FROM clientes";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Formulario Login / Registro de Usuarios</title>
        <link rel="stylesheet" href="./style.css">
    </head>
    
    <body>
        <div class="contenedor-formularios">
            <ul class="contenedor-tabs">
                <li class="tab tab-primera active"><a href="#iniciar-sesion">Iniciar Sesión</a></li>
                <li class="tab tab-segunda"><a href="#registrarse">Registrarse</a></li>
            </ul>

            <div class="contenido-tab">
                <div id="iniciar-sesion">
                        <h1>Iniciar Sesión</h1>
                        <form action="#" method="post">
                            <div class="contenedor-input">
                                <label>Usuario<span class="req">*</span></label>
                                <input type="text" required>
                            </div>
                            <div class="contenedor-input">
                                <label>Contraseña<span class="req">*</span></label>
                                <input type="password" required>
                            </div>
                            <p class="forgot"><a href="#">Se te olvidó la contraseña?</a></p>
                            <input type="submit" class="button button-block" value="Iniciar Sesión">
                        </form>
                    </div>

                <div id="registrarse">
                    <h1>Registrarse</h1>
                    <form action="agregar_cliente.php" method="post">
                        <div class="fila-arriba">
                            <div class="contenedor-input">
                                <label>Nombre<span class="req">*</span></label>
                                <input type="text" name="Nombre" required >
                            </div>
                            <div class="contenedor-input">
                                <label>Apellido<span class="req">*</span></label>
                                <input type="text" name="Apellido" required>
                            </div>
                            <br>
                        <input type="submit" class="button button-block" value="Registrarse">
                    </form>
                </div>
            </div>
        </div>

        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script><script  src="./script.js"></script>

    </body>

</html>