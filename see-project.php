<?php 
include("connectdb.php");

$sql = "SELECT *  FROM proyectos";
$query = mysqli_query($conn,$sql);

$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Watch Projects</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/css/custom.css">
</head>
<body class="bg-secondary">
    <nav class="navbar bg-light">
        <div class="container-fluid">
          <a href="index.html" class="navbar-brand">Alpes Designs Projects</a>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-secondary" type="submit">Search</button>
          </form>
        </div>
      </nav>

    <!-- tabla -->
    <table class="table table-dark table-striped">
        <thead>
          <tr>
            <th scope="col-12"># order</th>
            <th scope="col-12">Project Name</th>
            <th scope="col-12">Client Name</th>
            <th scope="col-12">Direction</th>
            <th scope="col-12">State</th>
            <th scope="col-12">Vendor</th>
            <th scope="col-12">Stage</th>
          </tr>
        </thead>
        <tbody>
          <?php
            foreach ($query as $row) {
            ?>
                <tr>
                    <th><?php echo $row['no_orden'] ?></th>
                    <th><?php echo $row['nombre_proyecto'] ?></th>
                    <th><?php echo $row['nombre_cliente'] ?></th>
                    <th><?php echo $row['direccion'] ?></th>
                    <th><?php echo $row['estado'] ?></th>
                    <th><?php echo $row['vendedor'] ?></th>
                    <th><?php echo $row['etapa'] ?></th>
                </tr>
            <?php
            }
            ?>
        </tbody>
      </table>
    <!-- tabla -->

    <div class="timeline">
      <div class="containerT left">
        <div class="content">
          <h2>Stage 1</h2>
          <p>Sales: meeting with the client, client needs, sketching.</p>
        </div>
      </div>
      <div class="containerT right">
        <div class="content">
          <h2>Stage 2</h2>
          <p>Preliminary design: lay outs, product specification, aprobation.</p>
        </div>
      </div>
      <div class="containerT left">
        <div class="content">
          <h2>Stage 3</h2>
          <p>Product construction request: authorized budget, materials, fabrication, instalation.</p>
        </div>
      </div>
      <div class="containerT right">
        <div class="content">
          <h2>Stage 4</h2>
          <p>Technical design engineering: huacales, toes, hinges.</p>
        </div>
      </div>
      <div class="containerT left">
        <div class="content">
          <h2>Stage 5</h2>
          <p>Doors, drawers, system box.</p>
        </div>
      </div>
      <div class="containerT right">
        <div class="content">
          <h2>Final Stage</h2>
          <p>Your project is on your way to install.</p>
        </div>
      </div>
    </div>
    

</body>
</html>