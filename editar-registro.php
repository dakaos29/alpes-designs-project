<?php
require("connectdb.php");
$no_orden = $_GET['editar_no_orden'];
$sele = "SELECT * FROM proyectos where no_orden = '$no_orden' ";
$result = $conn->query($sele);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>EDITAR PRODUCTOS</title>
<!--======================================= ESTILO DE LA TABLA PLOMO ==============================-->        
<link rel="stylesheet" type="text/css" href="total/ccs_form/view.css" media="all">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    

<script language="javascript" type="text/javascript">
function windowClose() {
window.open('','_parent','');
window.close();
}
</script>  
</head>
  

<?php
$status = "";
if(isset($_POST["submit"]))
{
$nombre_proyecto = $_POST["nombre_proyecto"];
$nombre_cliente = $_POST["nombre_cliente"];
$direccion = $_POST["direccion"];
$estado = $_POST["estado"];
$vendedor = $_POST["vendedor"];
$etapa = $_POST["etapa"];
  
  
$update = "UPDATE proyectos SET

nombre_proyecto=TRIM('.$nombre_proyecto.'),

nombre_cliente=TRIM('.$nombre_cliente.'),
      
direccion=TRIM('.$direccion.'),
      
estado=TRIM('.$estado.'),

etapa=TRIM('.$etapa.'),
      
WHERE no_orden=TRIM('.$no_orden.')";
  
  
if ($conn->query($update) === TRUE) 
{
echo '<script type="text/javascript">'; 
echo 'alert("EDICION CORRECTA. YA PUEDE CERRAR ESTA VENTANA ");'; 
echo 'window.location = "javascript:history.back(1)";';
echo '</script>';
 
}
else
{
 
echo '<script type="text/javascript">'; 
echo 'alert("ERROR REVISAR SI FALTAN DATOS");'; 
echo 'window.location = "javascript:history.back(1)";';
echo '</script>';
}
 
}

else {
 
?> 
  
  
<body id="main_body" >
	
	<div id="form_container">
	<h1><a>EDITAR PROYECTOS </a></h1>
	<form id="form_18653" class="appnitro"  method="post" action="">
	<div class="form_description">
    <h2>EDITAR REGISTRO DE PRODUCTOS</h2>
	<p>Base de datos produccion alpes</p>
	</div>						
	
    <ul >
      
      
    <input id="no_orden" name="no_orden"  class="element text small" type="hidden" maxlength="255" value="<?php echo $row['no_orden'];?>"/> 
		
			
	<li id="li_2" >
	<label class="description" for="nombre_proyecto">NOMBRE DEL PROYECTO : </label>
	<div>
	<input id="nombre_proyecto" name="nombre_proyecto" class="element text medium" type="text" maxlength="255" value="<?php echo $row['nombre_proyecto'];?>"/> 
	</div> 
	</li>
      
    <li id="li_3" >
	<label class="description" for="nombre_cliente">NOMBRE DEL CLIENTE : </label>
	<div>
	<input id="nombre_cliente" name="nombre_cliente" class="element text medium" type="text" maxlength="255" value="<?php echo $row['nombre_cliente'];?>"/> 
	</div> 
	</li>		


    <li id="li_4" >
	<label class="description" for="direccion">DIRECCION : </label>
	<div>
	<input id="direccion" name="direccion" class="element text medium" type="text" maxlength="255" value="<?php echo $row['direccion'];?>"/> 
	</div> 
	</li>	

    <li id="li_5" >
	<label class="description" for="estado">ESTADO : </label>
	<div>
	<input id="estado" name="estado" class="element text medium" type="text" maxlength="255" value="<?php echo $row['estado'];?>"/> 
	</div> 
	</li>	

    <li id="li_6" >
	<label class="description" for="etapa">ETAPA : </label>
	<div>
	<input id="etapa" name="etapa" class="element text medium" type="text" maxlength="255" value="<?php echo $row['etapa'];?>"/> 
	</div> 
	</li>	
			
	
    <li class="buttons">
	<input type="hidden" name="form_id" value="18653" />
	<input id="submit" class="btn btn-primary" type="submit" name="submit" value="Editar" />
    <input class="btn btn-primary" type="submit" onclick="javascript: form.action='edit-project.php';" value="Retornar" />      
                      
	</ul>
	</form>	
		
    <?php } ?>
      
	</div>
	</body>
</html>