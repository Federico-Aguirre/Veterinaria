<?php
session_start();
include("conexion.php");
$con = mysqli_connect($host, $user, $pass, $bd);

$Id = null;
$Nombre = $_POST['Nombre'];
$Raza = $_POST['Raza'];
$Sexo = $_POST['Sexo'];
$Edad = $_POST['Edad'];
$Nro_de_microchip = $_POST['Nro_de_microchip'];
$Vacuna_antirrábica = $_POST['Vacuna_antirrábica'];
$Tratamiento_antiparasitario = $_POST['Tratamiento_antiparasitario'];
$Otras_vacunas = $_POST['Otras_vacunas'];
$Información_adicional = $_POST['Información_adicional'];
$Id_cliente = $_SESSION["sessionId"];

$sql = "INSERT INTO mascotas VALUES('$Id','$Nombre','$Raza','$Sexo','$Edad','$Nro_de_microchip','$Vacuna_antirrábica','$Tratamiento_antiparasitario','$Otras_vacunas','$Información_adicional','$Id_cliente')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: formulario_mascota.php");
}else{

}

?>