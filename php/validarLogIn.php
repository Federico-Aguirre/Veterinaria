<?php
    session_start();

    if(!empty($_POST["btnLogIn"])) {
        if(empty($_POST["inputUsuarioLogIn"]) and empty($_POST["inputContraseñaLogIn"])) {
            echo '<script type="text/javascript">
            alert("Escriba usuario y contraseña");
            </script>';
        } else {
            $usuario = $_POST["inputUsuarioLogIn"];
            $contraseña = $_POST["inputContraseñaLogIn"];
            $query=$connect->query(" select * from clientes where Usuario='$usuario' and Contraseña='$contraseña' ");
            $row = mysqli_fetch_array($query);
            $sql=$connect->query(" select * from clientes where Usuario='$usuario' and Contraseña='$contraseña' ");
            if($datos=$sql->fetch_object()) {
                $_SESSION["sessionUsuario"] = $usuario;
                $_SESSION["sessionContraseña"] = $contraseña;
                $_SESSION["sessionId"] = $row['Id'];
                header("location:index.php");
            } else {
                echo '<script type="text/javascript">
                alert("usuario no existe");
                </script>';
            }
        }
    }
?>