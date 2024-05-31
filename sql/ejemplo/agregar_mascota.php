<?php
include("conexión.php");
$con = connection();


$Id = null;
$Id_cliente = $_POST[''];
$Especie = $_POST['Especie'];
$Raza = $_POST['Raza'];

$sql = "INSERT INTO mascotas VALUES('$Id','$Id_cliente','$Especie','$Raza')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: formulario_mascota.php");
}else{

}

?>