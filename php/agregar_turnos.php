<?php
session_start();
include("conexion.php");
$con = mysqli_connect($host, $user, $pass, $bd);

$Id = null;
$Id_cliente = $_SESSION["sessionId"];
$Fecha = $_POST['Fecha'];
$Mascota_a_atender = $_POST['Mascota_a_atender'];
$Asunto_a_atender = $_POST['Asunto_a_atender'];
$Mensaje = $_POST['Mensaje'];

$sql = "INSERT INTO turnos VALUES('$Id','$Id_cliente','$Fecha','$Mascota_a_atender','$Asunto_a_atender','$Mensaje')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: turnos.php");
}else{

}

?>