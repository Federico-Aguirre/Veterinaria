<?php

include("conexion.php");
$con = connection();

$Id=$_POST["Id"];
$Nombre = $_POST['Nombre'];
$Especie = $_POST['Especie'];
$Raza = $_POST['Raza'];
$Sexo = $_POST['Sexo'];
$Edad = $_POST['Edad'];
$Nro_de_microchip = $_POST['Nro_de_microchip'];
$Vacuna_antirrábica = $_POST['Vacuna_antirrábica'];
$Tratamiento_antiparasitario = $_POST['Tratamiento_antiparasitario'];
$Otras_vacunas = $_POST['Otras_vacunas'];
$Información_adicional = $_POST['Información_adicional'];

$sql="UPDATE mascotas SET Nombre='$Nombre', Especie='$Especie', Raza='$Raza', Sexo='$Sexo', Edad='$Edad', Nro_de_microchip='$Nro_de_microchip', Vacuna_antirrábica='$Vacuna_antirrábica', Tratamiento_antiparasitario='$Tratamiento_antiparasitario', Otras_vacunas='$Otras_vacunas', Información_adicional='$Información_adicional' WHERE Id='$Id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: formulario_mascota.php");
}else{

}

?>