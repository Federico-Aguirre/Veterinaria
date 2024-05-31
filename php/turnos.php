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
    <script src="../componentes js/calendario.js" defer></script>
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

    <seccion class="turnos seccion">
        <form action="agregar_turnos.php" method="post" class="turnos__formulario">
            <div class="turnos__formulario__titulo">Solicitar Turno</div>

            <label for="fecha">Fecha</label>
            <input id="fecha" name="Fecha" type="datetime-local" class="turnos__formulario__fecha" onkeydown="return false" required></input>

            <label for="mascotaAAtender">Mascota a atender</label>
            <select id="mascotaAAtender" name="Mascota_a_atender" class="turnos__formulario__mascotaAAtender" required>
                <?php 
                    include("conexion.php");
                    $result = mysqli_query($connect, " select * from mascotas where Id_cliente='".$_SESSION['sessionId']."'");
                    $i = 0;
                    while($row = mysqli_fetch_array($result)){
                    echo '            
                        <option value="'.$row['Nombre'].'">'.$row['Nombre'].'</option>              
                    ';
                    $i++;}
                ?>
            </select>

            <label for="asuntoAAtender">Asunto</label>
            <input id="asuntoAAtender" name="Asunto_a_atender" type="text" required>

            <label for="textarea">Mensaje</label>
            <textarea id="textarea" name="Mensaje"></textarea>
            <input type="submit" value="Enviar">
        </form>
    </seccion>
</body>
</html>