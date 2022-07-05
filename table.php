<?php
include("developers.php");
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container my-5">
 <div class="row">
   <div class="col-12">
    <?php echo $deleteMsg??''; ?>
    <div class="table-responsive">
      <table class="table table-bordered">
       <thead><tr><th>Tamayo</th>

         <th>No# orden</th>
         <th>Pieza</th>
         <th>Fecha de terminacion</th>
         <th>Fecha de inicio</th>
         <th>Fecha de finalizacion</th>
    </thead>
    <tbody>
  <?php
      if(is_array($fetchData)){      
      $sn=1;
      foreach($fetchData as $data){
    ?>
      <tr>
      <td><?php echo $sn; ?></td>
      <td><?php echo $data['no_orden']??''; ?></td>
      <td><?php echo $data['nombre_pieza']??''; ?></td>
      <td><?php echo $data['fecha_terminacion']??''; ?></td>
      <td><?php echo $data['fecha_inicio']??''; ?></td>
      <td><?php echo $data['fecha_finalizacion']??''; ?></td> 
     </tr>
     <?php
      $sn++;}}else{ ?>
      <tr>
        <td colspan="8">
    <?php echo $fetchData; ?>
  </td>
    <tr>
    <?php
    }?>
    </tbody>
     </table>
   </div>
</div>
</div>
</div>
</body>
</html>