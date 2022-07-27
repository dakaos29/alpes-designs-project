<?php
include ("connectdb.php");
$no_orden = $_GET["no_orden"];
$proyectos = "SELECT * FROM proyectos WHERE no_orden = '$no_orden'";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/css/custom.css">
</head>
<body>
		<body>
    <div class="content"> 
		<form class="container" action="editar-registro.php" method="post">
        <div class='wrap-table100'>  
        <div class='table100 ver1 m-b-110'>    
        <table data-vertable='ver1' class="table table-dark table-striped">
          					<br>
              				<h2 >TABLA DE PROYECTOS</h2>
          					<br>
                        	<thead class="text-center">
							<tr class='col-12 head'>
							<th># order</th>
                            <th>Project Name</th>
                            <th>Client Name</th>
                            <th>Direction</th>
                            <th>State</th>
                            <th>Vendor</th>
                            <th>Stage</th>
                            <th></th>
           					</tr>
							</thead>   
             <tbody>
	    	

<?php

$resultado = mysqli_query($conn, $proyectos);
while($crow = mysqli_fetch_assoc($resultado))
            			{	
?>
<tr class='row100'>
<td><input type="text" value="<?php echo $crow["no_orden"];?>" name="no_orden"></td>
<td><input type="text" value="<?php echo $crow["nombre_proyecto"];?>" name="nombre_proyecto"></td>
<td><input type="text" value="<?php echo $crow["nombre_cliente"];?>" name="nombre_cliente"></td>
<td><input type="text" value="<?php echo $crow["direccion"];?>" name="direccion"></td>
<td><input type="text" value="<?php echo $crow["estado"];?>" name="estado"></td>
<td><input type="text" value="<?php echo $crow["vendedor"];?>" name="vendedor"></td>
<td><input type="text" value="<?php echo $crow["etapa"];?>" name="etapa"></td>
                        
<?php
	} mysqli_free_result($resultado);	
?>
<td><input type="submit" class="btn btn-primary" value="Actualizar"></td>
</tr>
</tbody>      
</table>  
        	    
	</div>
	</div>
</form>
	</div>
 
</body>
</html>