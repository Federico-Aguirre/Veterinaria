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

    <section class="main seccion">
        <section class="main__heroe">
            <img src="../imagenes/main__imagenPrincipal.jpg" alt="imagen principal" class="main__heroe__imagenPrincipal">
            <div class="main__heroe__texto">Nuestro equipo de expertos veterinarios y personal dedicado está aquí para ofrecerte un viaje único en el mundo del cuidado animal. Desde los exóticos reptiles hasta los pequeños roedores, estamos preparados para abrazar la diversidad de todas las criaturas que llaman hogar a tu corazón.</div>
            <button class="main__heroe__solicitarTurno">Solicitar Turno</button>
            <button class="main__heroe__verProductos">Ver Productos</button>
        </section>

        <div class="linea"></div>

        <section class="main__servicios">
            <div class="main__servicios__titulo">Nuestros Servicios</div>
            <div class="main__servicios__contenedor">
                <img src="../imagenes/main__servicios__imagen1.jpg" alt="imagen de animal 1" class="main__servicios__contenedor__imagenIzquierda">
                <div class="main__servicios__contenedor__listaDeServicios">
                    <div class="main__servicios__contenedor__listaDeServicios__servicio1">
                        <img src="../imagenes/iconos/veterinario.png" alt="">
                        <div>Revisiones Generales</div>
                    </div>
                    <div class="main__servicios__contenedor__listaDeServicios__servicio2">
                        <img src="../imagenes/iconos/microscopio.png" alt="">
                        <div>Control de Parásitos</div>
                    </div>
                    <div class="main__servicios__contenedor__listaDeServicios__servicio3">
                        <img src="../imagenes/iconos/corazon.png" alt="">
                        <div>Estudios Cardiológicos</div>
                    </div>
                    <div class="main__servicios__contenedor__listaDeServicios__servicio4">
                        <img src="../imagenes/iconos/vacunacion.png" alt="">
                        <div>Vacunaciones</div>
                    </div>
                    <div class="main__servicios__contenedor__listaDeServicios__servicio5">
                        <img src="../imagenes/iconos/comidaDeMascota.png" alt="">
                    <div>Alimentos Balanceados</div>
                    </div>
                    <div class="main__servicios__contenedor__listaDeServicios__servicio6">
                        <img src="../imagenes/iconos/rayos-x.png" alt="">
                    <div>Radiografías y ecografías</div>
                    </div>
                </div>
                <img src="../imagenes/main__servicios__imagen2.jpg" alt="imagen de animal 2"  class="main__servicios__contenedor__imagenDerecha">
            </div>
        </section>

        <div class="linea"></div>

        <section class="main__direccion">
            <div class="main__direccion__titulo">Dirección, Horario y Teléfono</div>
            <div class="main__direccion__ubicacion">
                <img src="../imagenes/iconos/ubicacion.png" alt="icono de ubicacion">
                <div>Av. Independencia 1920</div>
            </div>
            <img src="../imagenes/mapa.jpg" alt="mapa" class="main__direccion__mapa">
            <div class="main__direccion__horario">
                <img src="../imagenes/iconos/calendario.png" alt="imagen calendario">
                <div>Lunes a Sábado de 7:00AM a 22:00PM</div>
            </div>
            <div class="main__direccion__telefono">
                <img src="../imagenes/iconos/telefono.png" alt="imagen telefono">
                <div>(011) 4400 2839</div>
            </div>
            <div class="main__direccion__whatsapp">
                <img src="../imagenes/iconos/whatsapp.png" alt="icono whatsapp">
                <div>11 3678 7918</div>
            </div>
        </section>

        <div class="linea"></div>

        <section class="main__mediosDePago">
                <div class="main__mediosDePago__titulo">Medios de Pagos</div>
                <div class="main__mediosDePago__tarjetasContenedor">
                    <div>
                        <img src="../imagenes/tarjetas de credito/visa.svg" alt="tarjeta 1">
                        <div>Visa</div>
                    </div>
                    <div>
                        <img src="../imagenes/tarjetas de credito/mastercard.svg" alt="tarjeta 2">
                        <div>Master Card</div>
                    </div>
                    <div>
                        <img src="../imagenes/tarjetas de credito/mercado-pago.svg" alt="tarjeta 3">
                        <div>Mercado Pago</div>
                    </div>
                    <div>
                        <img src="../imagenes/tarjetas de credito/american-express.svg" alt="tarjeta 4">
                        <div>American Express</div>
                    </div>
                </div>
        </section>

        <div class="linea"></div>
    </section>

    <footer>
        <div>Términos de uso</div>
        <div>© 1996-1997 +cota</div>
        <div>Politicas de privacidad</div>
    </footer>
</body>
</html>