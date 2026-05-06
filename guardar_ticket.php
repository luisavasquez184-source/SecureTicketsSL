<?php

include("conexion.php");

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$prioridad = $_POST['prioridad'];
$categoria = $_POST['categoria'];
$descripcion = $_POST['descripcion'];

$codigo = "#ST-" . rand(100,999);

$sql = "INSERT INTO tickets
(codigo_ticket, usuario, correo, problema, prioridad, categoria, estado)

VALUES
('$codigo','$nombre','$correo','$descripcion','$prioridad','$categoria','Abierto')";

if(mysqli_query($conexion, $sql)){

    echo "success";

}else{

    echo mysqli_error($conexion);

}

?>