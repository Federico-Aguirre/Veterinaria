

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../main.css">
    <script src="../componentes js/variablesGlobales.js" defer></script>
    <script src="../componentes js/header.js" defer></script>
    <script src="../componentes js/logOut.js" defer></script>
    <title>Veterinaria</title>
</head>
<body>
    <header class="header">
    </header>

    <div class="navBarMenu">
        <a href="./index.php" class="navBarMenu__home">Inicio</a>
        <a href="./acercaDeNosotros.php" class="navBarMenu__projects">Acerca de Nosotros</a>
        <a href="./contacto.php" class="navBarMenu__contacto">Contacto</a>
        <a href="./logIn.php" class="navBarMenu__logIn">Log In</a>
        <a href="./turnos.php" class="navBarMenu__turnos">Solicitar Turno</a>
        <a href="./stock.php" class="navBarMenu__stock">Ver Productos</a>
    </div>

    <seccion class="logIn seccion">
        <form class="logIn__formulario" action="" method="post">
            <?php
                include("conexion.php");
                include("validarLogIn.php");
            ?>
            <div class="logIn__formulario__titulo">Log In</div>

            <label for="email">Email</label>
            <input id="email" type="email" name="inputEmailLogIn" class="logIn__formulario__email" />

            <label for="contraseña">Contraseña</label>
            <input id="contraseña" type="password" name="inputContraseñaLogIn" class="logIn__formulario__contraseña" />

            <input type="submit" name="btnLogIn" value="Enviar">
        </form>
    </seccion>
</body>
</html>