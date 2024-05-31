<?php
include("conexión.php");
$con = connection();

$sql = "SELECT * FROM mascotas";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>AGREGAR MASCOTA</title>
        <link rel="stylesheet" href="./style.css">
    </head>
    
    <body>
        <div class="contenedor-formularios">
            <ul class="contenedor-tabs">
                <li class="tab tab-primera active"><a href="#iniciar-sesion">Iniciar Sesión</a></li>
                <li class="tab tab-segunda"><a href="#registrarse">Registrarse</a></li>
            </ul>

            <div class="contenido-tab">
                <div id="registrarse">
                    <h1>AGREGAR MASCOTA</h1>
                    <form action="agregar_mascota.php" method="post">
                        
                        <div class="fila-arriba">

                            <div class="contenedor-input">
                                <label>Especie<span class="req">*</span></label>
                                <input type="text" name="Especie" required >
                            </div>
                            <div class="contenedor-input">
                                <label>Raza<span class="req">*</span></label>
                                <input type="text" name="Raza" required>
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