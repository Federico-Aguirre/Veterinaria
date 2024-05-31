<?php
include("conexión.php");
$con = connection();

$Id = null;
$Nombre = $_POST['Nombre'];
$Apellido = $_POST['Apellido'];

$sql = "INSERT INTO clientes VALUES('$Id','$Nombre','$Apellido')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: formulario_cliente.php");
}else{

}

?>