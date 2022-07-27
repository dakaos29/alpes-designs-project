<?php

include ("connectdb.php");

$no_orden = $_GET['no_orden'];
$eliminar = "DELETE FROM proyectos WHERE no_orden = '$no_orden'";

$resultadosEliminar = mysqli_query($conn, $eliminar);

if ($resultadosEliminar) {
	header("Location: edit-project.php");
} else {
	echo "<script>alert('No se pudieron borrar datos'); windows.history.go(-1);</script>";
}