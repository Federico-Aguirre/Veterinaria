<?php /*
session_start();

$_SESSION["nombreDeUsuario"] = "fede";

    function myfunction() {
    $GLOBALS["nombreDeUsuario"] = "Federico";

    session_unset($_SESSION["nombreDeUsuario"])
    session_unset()  esto borra todos los datos de la session 

    session_destroy() 
    esto borra la session
    es mejor usar session_unset() primero asi se borra tambien los datos de la pagina actual 
    sin refrescar
    }

    myfunction()
*/