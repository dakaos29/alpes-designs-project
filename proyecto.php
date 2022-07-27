<?php
include ('connectdb.php');

if(isset($_POST['submit'])){

  if ( !empty($_POST['no_orden']))
  {
    $no_orden = $_POST['no_orden'];
    $nombre_proyecto = $_POST['nombre_proyecto'];
    $nombre_cliente = $_POST['nombre_cliente'];
    $direccion = $_POST['direccion'];
    $estado = $_POST['estado'];
    $vendedor = $_POST['vendedor'];
    $etapa = $_POST['etapa'];

    
    if(isset($_POST['no_orden'])){
        $no_orden = filter_var(trim($_POST['no_orden']), FILTER_SANITIZE_STRING); 
   
    }
    if(isset($_POST['nombre_proyecto'])){
        $nombre_proyecto = filter_var(trim($_POST['nombre_proyecto']), FILTER_SANITIZE_STRING); 
   
    }
    if(isset($_POST['nombre_cliente'])){
        $nombre_cliente = filter_var(trim($_POST['nombre_cliente']), FILTER_SANITIZE_STRING); 
   
    }
    if(isset($_POST['direccion'])){
        $direccion = filter_var(trim($_POST['direccion']), FILTER_SANITIZE_STRING); 
   
    }
    if(isset($_POST['estado'])){
        $estado = filter_var(trim($_POST['estado']), FILTER_SANITIZE_STRING); 
   
    }
    if(isset($_POST['vendedor'])){
        $vendedor = filter_var(trim($_POST['vendedor']), FILTER_SANITIZE_STRING); 
   
    }
    if(isset($_POST['etapa'])){
        $etapa = filter_var(trim($_POST['etapa']), FILTER_SANITIZE_STRING); 
   
    }

    if(empty($no_orden)){
        echo json_encode(array(
            'error' => true,
            'campo' => 'no_orden'
        ));
        return;
    }

    if(empty($nombre_proyecto)){
        echo json_encode(array(
            'error' => true,
            'campo' => 'nombre_proyecto'
        ));
        return;
    }
    if(empty($nombre_cliente)){
        echo json_encode(array(
            'error' => true,
            'campo' => 'nombre_cliente'
        ));
        return;
    }
    if(empty($direccion)){
        echo json_encode(array(
            'error' => true,
            'campo' => 'direccion'
        ));
        return;
    }
    if(empty($estado)){
        echo json_encode(array(
            'error' => true,
            'campo' => 'estado'
        ));
        return;
    }
    if(empty($vendedor)){
        echo json_encode(array(
            'error' => true,
            'campo' => 'vendedor'
        ));
        return;
    }
    if(empty($etapa)){
        echo json_encode(array(
            'error' => true,
            'campo' => 'etapa'
        ));
        return;
    }

    echo json_encode(array(
        'error' => false,
        'campo' => 'exito'
    ));
    
}
    else {
        echo json_encode(array(
            'error' => true,
            'campo' => 'post'
        ));
    }
    

    $query = "INSERT INTO proyectos (no_orden, nombre_proyecto, nombre_cliente, direccion, estado, vendedor, etapa) VALUES ('$no_orden','$nombre_proyecto','$nombre_cliente','$direccion','$estado','$vendedor','$etapa')";
    $run = mysqli_query($conn, $query) or die (mysqli_error());
    if($run){
      echo 'data submitted';
    } else {
      echo 'data was not submitted';
    }

    
    
  }
  header('Location: edit-project.php');

?>