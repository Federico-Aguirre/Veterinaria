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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../main.css">
    <script src="../componentes js/variablesGlobales.js" defer></script>
    <script src="../componentes js/header.js" defer></script>
    <script src="../componentes js/displayProducts.js" defer></script>
    <title>Veterinaria</title>
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

    <section class="stock seccion">
        <div class="stock__filtro">
            <div class="stock__filtro__texto">Filtrar por categoria: Alimentos</div>
            <div class="stock__filtro__listaDeFiltros">
                <button id="filtro0">Sin filtro</button>
                <button id="filtro1">Alimentos</button>
                <button id="filtro2">Camas</button>
                <button id="filtro3">Juguetes</button>
                <button id="filtro4">Transportadoras</button>
                <button id="filtro5">Otros</button>
            </div>
        </div>
        <div class="stock__tarjeta"></div>
        <div class="linea"></div>
    </section>

    <footer>
        <div>Términos de uso</div>
        <div>© 1996-1997 +cota</div>
        <div>Politicas de privacidad</div>
    </footer>
</body>
</html>