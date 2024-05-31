<?php 
    include("conexion.php");
    $con=connection();

    $id=$_GET["id"];

    $sql="SELECT * FROM mascotas WHERE id='$id'";
    $query=mysqli_query($con, $sql);

    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Editar mascota</title>
        <link rel="stylesheet" href="./style.css">
    </head>
    <body>
        <div class="contenedor-formularios">
            <ul class="contenedor-tabs">
                <li class="tab tab-primera active"><a href="#actualizar-mascota">Actualizar Mascota</a></li>
                <li class="tab tab-segunda"><a href="#volver">Volver</a></li>
            </ul>

            <div class="contenido-tab">
                <div id="actualizar-mascota">
                    <h1>Actualizar Mascota</h1>
                    <form action="editar_mascota.php" method="POST">
                        <input type="hidden" name="Id" value="<?= $row['Id']?>">
                        <div class="fila-arriba">
                            <div class="contenedor-input">
                                <label><span class="req"></span></label>
                                <input type="text" name="Nombre" placeholder="Nombre" value="<?= $row['Nombre']?>">
                            </div>
                            <div class="contenedor-input">
                                <label><span class="req"></span></label>
                                <input type="text" name="Especie" placeholder="Especie" value="<?= $row['Especie']?>">
                            </div>
                        </div>
                        <br>
                        <div class="fila-arriba">
                            <div class="contenedor-input">
                                <label><span class="req"></span></label>
                                <input type="text" name="Raza" placeholder="Raza" value="<?= $row['Raza']?>">
                            </div>
                            <div class="contenedor-input">
                                <label><span class="req"></span></label>
                                <input type="text" name="Sexo" placeholder="Sexo" value="<?= $row['Sexo']?>">
                            </div>
                        </div>
                        <br>
                        <div class="fila-arriba">
                            <div class="contenedor-input">
                                <label><span class="req"></span></label>
                                <input type="text" name="Edad" placeholder="Edad" value="<?= $row['Edad']?>">
                            </div>
                            <div class="contenedor-input">
                                <label><span class="req"></span></label>
                                <input type="text" name="Nro_de_microchip" placeholder="Nro_de_microchip" value="<?= $row['Nro_de_microchip']?>">
                            </div>
                        </div>
                        <br>
                        <div class="contenedor-input">
                            <label><span class="req"></span></label>
                            <input type="text" name="Vacuna_antirrábica" placeholder="Vacuna_antirrábica" value="<?= $row['Vacuna_antirrábica']?>">
                        </div>
                        <br>
                        <div class="contenedor-input">
                            <label><span class="req"></span></label>
                            <input type="text" name="Tratamiento_antiparasitario" placeholder="Tratamiento_antiparasitario" value="<?= $row['Tratamiento_antiparasitario']?>">
                        </div>
                        <br>
                        <div class="contenedor-input">
                            <label><span class="req"></span></label>
                            <input type="text" name="Otras_vacunas" placeholder="Otras_vacunas" value="<?= $row['Otras_vacunas']?>">
                        </div>
                        <br>
                        <div class="contenedor-input">
                            <label><span class="req"></span></label>    
                            <input type="text" name="Información_adicional" placeholder="Información_adicional" value="<?= $row['Información_adicional']?>">
                        </div>
                        <br><br><br>
                        <input type="submit" class="button button-block" value="Actualizar">
                    </form>
                </div>

                <div id="volver">
                    <a href="formulario_mascota.php"><h1>Volver</h1></a>
                </div>
            </div>
        </div>

        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script><script  src="./script.js"></script>

    </body>
</html>