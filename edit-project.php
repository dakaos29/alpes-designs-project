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
		<div class="container">
        <div class='wrap-table100'>  
        <div class='table100 ver1 m-b-110'>    
        <table data-vertable='ver1' class="table table-dark table-striped">
          					<br>
              				<h2 >TABLA DE PROYECTOS</h2>
          					<br>
                        	<thead class="text-center">
							<tr class='row100 head'>
							<th scope="col-12"># order</th>
                            <th scope="col-12">Project Name</th>
                            <th scope="col-12">Client Name</th>
                            <th scope="col-12">Direction</th>
                            <th scope="col-12">State</th>
                            <th scope="col-12">Vendor</th>
                            <th scope="col-12">Stage</th>
                            <th scope="col-12"></th>
           					</tr>
							</thead>   
              <tbody>
<?php
require('connectdb.php');
?>

<?php

$sql = "SELECT * from proyectos order by no_orden DESC";
$result = mysqli_query($conn, $sql);
while($crow = mysqli_fetch_assoc($result))
            			{	
?>
<tr class='row100'>
<td><?php echo $crow['no_orden'];?></td>
<td><?php echo $crow['nombre_proyecto']; ?></td>
<td><?php echo $crow['nombre_cliente']; ?></td>
<td><?php echo $crow['direccion']; ?></td>
<td><?php echo $crow['estado']; ?></td>
<td><?php echo $crow['vendedor']; ?></td>
<td><?php echo $crow['etapa']; ?></td>
<td><a href="editar-registro.php?editar_no_orden=<?php echo $crow['no_orden']; ?>" class="edit_btn" >Editar</a></td>
</tr>
<?php
  	    	}		
?>
       	</tbody>
	    	</table>             
        	    
	</div>
	</div>
	<div>
	</div>
	</div>
	</div>
 
</body>
</html>