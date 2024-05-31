<?php
include("conexion.php");
$con = mysqli_connect($host, $user, $pass, $bd);

$Id = null;
$Nombre = $_POST['Nombre'];
$Apellido = $_POST['Apellido'];
$DNI = $_POST['DNI'];
$CC = $_POST['CUIL_CUIT'];
$Dirección = $_POST['Dirección'];
$Piso = $_POST['Piso'];
$Departamento = $_POST['Departamento'];
$Localidad = $_POST['Localidad'];
$Teléfono = $_POST['Teléfono'];
$Celular = $_POST['Celular'];
$Email = $_POST['Email'];
$Usuario = $_POST['Usuario'];
$Contraseña = $_POST['Contraseña'];

$sql = "INSERT INTO clientes VALUES('$Id','$Nombre','$Apellido','$DNI','$CC','$Dirección','$Piso','$Departamento','$Localidad','$Teléfono','$Celular','$Email','$Usuario','$Contraseña')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>