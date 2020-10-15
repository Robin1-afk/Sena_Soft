<?php 
session_start();
require "../configuracion/crud.php";

$nombre = $_POST['producto'];

$precio = $_POST['precio'];

$stock = $_POST['cantidad'];

$id_proveedor = $_POST['sucursal'];

$sql = " INSERT  INTO Stock_Producto_Bodega (ID_Sucursal , Nombre , Precio  , Stock)  VALUE ('$id_proveedor' , '$nombre' , '$precio' , '$stock'  )";
$verificar = $conexion->query($sql);
if($verificar){
    header("location: ../enviarasucursales.php");
}else {
    echo "hubo algun error " . mysqli_connect_errno();   
}

?>