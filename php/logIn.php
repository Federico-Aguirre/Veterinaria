<?php
    if (isset($_SESSION["sessionUsuario"])) {
            echo '';
        }
    else 
        {
            $_SESSION["sessionUsuario"] = "";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/animacionesHeader.css">
    <script src="../componentes js/variablesGlobales.js" defer></script>
    <script src="../componentes js/header.js" defer></script>
    <title>Formulario Login / Registro de Usuarios</title>
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
            <li class="tab tab-primera active"><a href="#iniciar-sesion">Iniciar Sesión</a></li>
            <li class="tab tab-segunda"><a href="#registrarse">Registrarse</a></li>
        </ul>

        <div class="contenido-tab">
            <div id="iniciar-sesion">
                <h1>Iniciar Sesión</h1>
                <form action="" method="post">
                    <?php
                        include("conexion.php");
                        include("validarLogIn.php");
                    ?>
                    <div class="contenedor-input">
                        <label>Usuario <span class="req">*</span></label>
                        <input type="text" name="inputUsuarioLogIn" required>
                    </div>
                    <div class="contenedor-input">
                        <label>Contraseña<span class="req">*</span></label>
                        <input type="password" name="inputContraseñaLogIn" required>
                    </div>
                    <p class="forgot"><a href="#">Se te olvidó la contraseña?</a></p>
                    <input type="submit" class="button button-block" name="btnLogIn" value="Iniciar Sesión">
                </form>
            </div>

            <div id="registrarse">
                <h1>Registrarse</h1>
                <form action="agregar_cliente.php" method="post">
                    <div class="fila-arriba">
                        <div class="contenedor-input">
                            <label>Nombre/s<span class="req">*</span></label>
                            <input type="text" name="Nombre" required >
                        </div>
                        <div class="contenedor-input">
                            <label>Apellido/s<span class="req">*</span></label>
                            <input type="text" name="Apellido" required>
                        </div>
                    </div>
                    <br>
                    <div class="fila-arriba">
                        <div class="contenedor-input">
                            <label>DNI<span class="req">*</span></label>
                            <input type="text" name="DNI" required>
                        </div>    
                        <div class="contenedor-input">
                            <label>CUIL/CUIT<span class="req"></span></label>
                            <input type="text" name="CUIL_CUIT">
                        </div>  
                    </div>                    
                    <br>
                    <div class="fila-arriba">
                        <div class="contenedor-input">
                            <label>Dirección<span class="req">*</span></label>
                            <input type="text" name="Dirección" required>
                        </div>    
                        <div class="contenedor-input">
                            <label>Piso<span class="req"></span></label>
                            <input type="number" name="Piso">
                        </div>
                    </div>
                    <br>
                    <div class="fila-arriba">
                        <div class="contenedor-input">
                            <label>Departamento<span class="req"></span></label>
                            <input type="text" name="Departamento">
                        </div>    
                        <div class="contenedor-input">
                            <label>Localidad<span class="req">*</span></label>
                            <input type="text" name="Localidad" required>
                        </div>
                    </div>
                    <br>
                    <div class="fila-arriba">
                        <div class="contenedor-input">
                            <label>Teléfono Particular<span class="req"></span></label>
                            <input type="text" name="Teléfono">
                        </div>
                        <div class="contenedor-input">
                            <label>Teléfono Celular<span class="req">*</span></label>
                            <input type="text" name="Celular" required>
                        </div>
                    </div>
                    <br>
                    <div class="contenedor-input">
                        <label>Correo Electrónico<span class="req">*</span></label>
                        <input type="email" name="Email" required>
                    </div>
                    <br>
                    <div class="contenedor-input">
                        <label>Usuario<span class="req">*</span></label>
                        <input type="text" name="Usuario" required>
                    </div>
                    <br>
                    <div class="contenedor-input">
                        <label>Contraseña<span class="req">*</span></label>
                        <input type="password" name="Contraseña" required>
                    </div>
                    <br>
                    <div class="contenedor-input">
                        <label>Confirmar Contraseña<span class="req">*</span></label>
                        <input type="password" name="Contraseña" required>
                    </div>
                    <br>
                    <input type="submit" class="button button-block" value="Registrarse">
                </form>
            </div>
        </div>
    </div>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script  src="./script.js"></script>

</body>
</html>