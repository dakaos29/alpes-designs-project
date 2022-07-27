<?php
include ("connectdb.php");

$no_orden = $_POST['no_orden'];
$nombre_proyecto = $_POST['nombre_proyecto'];
$nombre_cliente = $_POST['nombre_cliente'];
$direccion = $_POST['direccion'];
$estado = $_POST['estado'];
$vendedor = $_POST['vendedor'];
$etapa = $_POST['etapa'];

//actualizar datos
$actualizar = "UPDATE proyectos SET no_orden = '$no_orden', nombre_proyecto = '$nombre_proyecto', nombre_cliente = '$nombre_cliente', direccion = '$direccion', estado = '$estado', vendedor = '$vendedor', etapa = '$etapa' WHERE no_orden = '$no_orden'";

$resultado = mysqli_query($conn, $actualizar);

if ($resultado) {
	echo "<script>alert('Se han actualizado los cambios correctamente'); window.location='edit-project.php';</script>";
} else {
	echo "<script>alert('No se pudieron actualizar datos'); windows.history.go(-1);</script>";
}