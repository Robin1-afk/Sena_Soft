<?php
session_start();
require('../configuracion/crud.php');

$usuario = $_SESSION['ID_Usuario'];
$nit = $_POST['Nit_Sucursal'];
$nombre =$_POST['nombre'];
$email =$_POST['email'];
$telefono = $_POST['Telefono'];
$Nit_Empresa = null;

$consult = "SELECT * FROM empresa WHERE ID_Usuario = '$usuario' ";
$Empresa = $conexion->query($consult);
while ($row = $Empresa ->fetch_assoc()){
    $Nit_Empresa = $row['Nit_Empresa'];
}


$sql = "INSERT INTO sucursal ( Nombre, Direccion ,Telefono , Email , Nit_Empresa ,  ID_Usuario ) VALUE ( '$nombre', '$nit' , '$telefono', '$email', '$Nit_Empresa', '$usuario' )";
$verificar = $conexion->query($sql);
if($verificar){
 echo "HOLA MUNDPO";
   
}else {
    echo "hubo algun error " . mysqli_errno($conexion);   
}
?>
