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

    <section class="acercaDeNosotros seccion">
        <img src="../imagenes/acercaDeNosotros__ImagenPrincipal.jpg" alt="imagen principal" class="acercaDeNosotros__imagenPrincipal">

        <div class="acercaDeNosotros__textoPrincipal">
            +Cota nació del amor incondicional hacia los animales y el deseo de proporcionarles el más alto nivel de atención veterinaria.
            <br>
            Cada miembro de nuestro equipo comparte una pasión común: garantizar la felicidad y la salud de tus mascotas.
            <br>
            Nos enorgullece ofrecer un enfoque personalizado y compasivo en cada consulta, cirugía o tratamiento que realizamos
        </div>

        <br><br>

        <div class="acercaDeNosotros__misionTitulo">Misión</div>
        <br>
        <div class="acercaDeNosotros__misionTexto">
            En +cota, nos dedicamos a cuidar el bienestar 
            de todas las mascotas, ofreciendo servicios médicos y atención de alta calidad. 
            Nuestro compromiso es brindar un ambiente cálido y compasivo, donde tanto los 
            animales como sus familias se sientan seguros y atendidos en todo momento.
        </div>
        
        <br><br>

        <div class="acercaDeNosotros__visionTitulo">Visión</div>
        <br>
        <div class="acercaDeNosotros__visionTexto">
            Nos esforzamos por ser reconocidos como un referente en la atención veterinaria, 
            destacando por nuestra excelencia médica, innovación en tratamientos y un enfoque 
            holístico hacia la salud animal. Aspiramos a ser la primera opción para todas las 
            familias que buscan el mejor cuidado para sus mascotas en nuestra comunidad.
        </div>

        <br><br>

        <div class="acercaDeNosotros__valoresTitulo">Valores</div>
        <br>
        <div class="acercaDeNosotros__valoresTexto">
            <ol>
                <li>
                    <span>1. </span>
                    Compasión: Nos comprometemos a tratar a todas las mascotas con el mismo amor 
                    y compasión que brindaríamos a nuestros propios animales.
                </li>
                <br>
                <li>
                    <span>2. </span>
                    Profesionalismo: Mantenemos los más altos estándares éticos y profesionales en 
                    cada aspecto de nuestra práctica veterinaria.
                </li>
                <br>
                <li>
                    <span>3. </span>
                    Colaboración: Valoramos la colaboración y comunicación abierta con los dueños de 
                    las mascotas para proporcionar un cuidado integral y personalizado.
                </li>
                <br>
                <li>
                    <span>4. </span>
                    Responsabilidad: Nos responsabilizamos por el bienestar y la salud de cada animal 
                    que atendemos, tomando decisiones informadas y éticas en todo momento.
                </li>
                <br>
                <li>
                    <span>5. </span>
                    Innovación: Estamos comprometidos a mantenernos actualizados con los últimos 
                    avances en medicina veterinaria y tecnología para ofrecer los mejores tratamientos 
                    posibles.
                </li>
                <br>
                <li>
                    <span>6. </span>
                    Comunidad: Nos involucramos activamente en nuestra comunidad, apoyando iniciativas 
                    locales y educando a las personas sobre el cuidado responsable de las mascotas.
                </li>
            </ol>
        </div>

        <div class="linea"></div><br>
    </section>
    
    <footer>
        <div>Términos de uso</div>
        <div>© 1996-1997 +cota</div>
        <div>Politicas de privacidad</div>
    </footer>
</body>
</html>