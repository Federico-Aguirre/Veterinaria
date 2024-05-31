<?php
    session_start();
    if (isset($_SESSION["sessionUsuario"])) {
            echo '';
        }
        else 
        {
            $_SESSION["sessionUsuario"] = "";
    }
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>ABM de Mascotas</title>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/reset.css">
        <link rel="stylesheet" href="../css/navbar.css">
        <link rel="stylesheet" href="../css/header.css">
        <link rel="stylesheet" href="../css/animacionesHeader.css">
        <script src="../componentes js/variablesGlobales.js" defer></script>
        <script src="../componentes js/header.js" defer></script>
    </head>
    <body>
    <header class="header">
        <?php 
            if($_SESSION["sessionUsuario"] == "") {
            echo '
                <nav>
                    <ul>
                        <li class="header__logoContenedor"><img src="../imagenes/logo.png" alt="logo" class="header__logoContenedor__logo"></li>
                        <li class="header__inicio"><a href="./index.php">Inicio</a></li>
                        <li class="header__acercaDeNosotros"><a href="./acercaDeNosotros.php">Acerca de Nosotros</a></li>
                        <li class="header__contacto"><a href="./contacto.php" class="header__contacto__button">Contacto</a></li>
                        <li class="header__logIn"><a href="./logIn.php" class="header__logIn__button">Log In</a></li> 
                        <button class="header__navBar" title="navBarMenu">
                            <div class="header__navBar__line"></div>
                            <div class="header__navBar__line"></div>
                        </button>
                    </ul>
                </nav>
                ';}
            else {
                echo '
                <nav>
                    <ul>
                        <li class="header__logoContenedor"><img src="../imagenes/logo.png" alt="logo" class="header__logoContenedor__logo"></li>
                        <li class="header__inicio"><a href="./index.php">Inicio</a></li>
                        <li class="header__acercaDeNosotros"><a href="./acercaDeNosotros.php">Acerca de Nosotros</a></li>
                        <li class="header__contacto"><a href="./contacto.php" class="header__contacto__button">Contacto</a></li>
                        <li class="header__logIn"><a href="LogOut.php" class="header__logOut__button">Log Out</a></li>
                        <button class="header__navBar" title="navBarMenu">
                            <div class="header__navBar__line"></div>
                            <div class="header__navBar__line"></div>
                        </button>
                        <li class="header__perfil"><img src="../imagenes/iconos/usuario.svg"/ class="header__iconoUsuario /><div">'.$_SESSION["sessionUsuario"].'</div></li>
                        <li class="header__carroDeCompra"><img src="../imagenes/iconos/shopping-cart.svg" class="header__carroDeCompra__button" />
                        </li>
                    </ul>
                </nav>';
            }
        ?>
    </header>

    <div class="navBarMenu">
        <?php 
            if($_SESSION["sessionUsuario"] == "") {
            echo '
                <a href="./index.php" class="navBarMenu__home">Inicio</a>
                <a href="./acercaDeNosotros.php" class="navBarMenu__projects">Acerca de Nosotros</a>
                <a href="./contacto.php" class="navBarMenu__contacto">Contacto</a>
                <a href="./logIn.php" class="navBarMenu__logIn">Log In</a>
                <a href="./turnos.php" class="navBarMenu__turnos">Solicitar Turno</a>
                <a href="./stock.php" class="navBarMenu__stock">Ver Productos</a>
            ';}
            else
            {
                echo '
                    <a href="./index.php" class="navBarMenu__home">Inicio</a>
                    <a href="./acercaDeNosotros.php" class="navBarMenu__projects">Acerca de Nosotros</a>
                    <a href="./contacto.php" class="navBarMenu__contacto">Contacto</a>
                    <a href="./turnos.php" class="navBarMenu__turnos">Solicitar Turno</a>
                    <a href="./stock.php" class="navBarMenu__stock">Ver Productos</a>
                ';
            }
        ?>
    </div>
        <div class="contenedor-formularios">
            <ul class="contenedor-tabs">
                <li class="tab tab-primera"><a href="#agregar-mascota">Agregar Mascota</a></li>
                <li class="tab tab-segunda"><a href="#editar-borrar-mascota">Editar / Borrar Mascota</a></li>
                <li class="tab tab-tercera"><a href="#ver-mascotas">Ver Mascotas</a></li>
                <li class="tab tab-cuarta"><a href="#volver">Volver</a></li>
            </ul>

            <div class="contenido-tab">   
                
                <div id="agregar-mascota">
                    <h1>Agregar Mascota</h1>
                    <form action="agregar_mascota.php" method="post">
                        
                        <div class="contenedor-input">
                            <label>Nombre del animal<span class="req">*</span></label>
                            <input type="text" name="Nombre" required >
                        </div>
                        <br>
                        <div class="fila-arriba">
                            <div class="contenedor-input">
                                <label>Raza<span class="req">*</span></label>
                                <input type="text" name="Raza" required>
                            </div>
                            <div class="contenedor-input">
                                <label>Sexo<span class="req">*</span></label>
                                <input type="text" name="Sexo" required>
                            </div>
                        </div>
                        <br>
                        <div class="fila-arriba">
                            <div class="contenedor-input">
                                <label>Edad<span class="req">*</span></label>
                                <input type="number" name="Edad" required>
                            </div>
                            <div class="contenedor-input">
                                <label>Nro. de microchip<span class="req"></span></label>
                                <input type="text" name="Nro_de_microchip">
                            </div>
                        </div>
                        <br>
                        <div class="contenedor-input">
                            <label>Vacuna antirrábica<span class="req">*</span></label>
                            <input type="text" name="Vacuna_antirrábica" required>
                        </div>
                        <br>
                        <div class="contenedor-input">
                            <label>Tratamiento antiparasitario<span class="req"></span></label>
                            <input type="text" name="Tratamiento_antiparasitario">
                        </div>
                        <br>
                        <div class="contenedor-input">
                            <label>Otras vacunas<span class="req">*</span></label>
                            <input type="text" name="Otras_vacunas" required>
                        </div>
                        <br>
                        <div class="contenedor-input">
                            <label>Información adicional<span class="req"></span></label>    
                            <input type="text" name="Información_adicional">
                        </div>
                        <br><br><br>
                        <input type="submit" class="button button-block" value="Guardar">
                    </form>
                </div>

                <div id="editar-borrar-mascota">
                    <h1>Editar / Borrar Mascota</h1>
                    <table>
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Especie</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = mysqli_fetch_array($query)): ?>
                            <tr>
                                <th><?= $row['Nombre'] ?></th>
                                <th><?= $row['Especie'] ?></th>
                                <th><a href="actualizar_mascota.php?id=<?= $row['Id'] ?>">Editar</a></th>
                                <th><a href="borrar_mascota.php?id=<?= $row['Id'] ?>">Borrar</a></th>
                            </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>

                <div id="ver-mascotas">
                    <h1>Ver Mascotas</h1>
                </div>

                <div id="volver">
                    <a href="index.php"><h1>Volver</h1></a>
                </div>

            </div>
        </div>

        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script><script  src="./script.js"></script>

    </body>
</html>