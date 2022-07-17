<?php
include ('connectdb.php');

if(isset($_POST['submit'])){

  if ( !empty($_POST['email']))
  {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $telefono = $_POST['telefono'];
    $ciudad = $_POST['ciudad'];
    $estado = $_POST['estado'];
    $zip = $_POST['zip'];

    
    if(isset($_POST['nombre'])){
        $nombre = filter_var(trim($_POST['nombre']), FILTER_SANITIZE_STRING); 
   
    }
    if(isset($_POST['apellido'])){
        $apellido = filter_var(trim($_POST['apellido']), FILTER_SANITIZE_STRING); 
   
    }
    if(isset($_POST['email'])){
        $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL); 
   
    }
    if(isset($_POST['password'])){
        $password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING); 
   
    }
    if(isset($_POST['ciudad'])){
        $ciudad = filter_var(trim($_POST['ciudad']), FILTER_SANITIZE_STRING); 
   
    }
    if(isset($_POST['estado'])){
        $estado = filter_var(trim($_POST['estado']), FILTER_SANITIZE_STRING); 
   
    }
    if(isset($_POST['telefono'])){
        $telefono = filter_var(trim($_POST['telefono']), FILTER_SANITIZE_STRING); 
   
    }
    if(isset($_POST['zip'])){
        $zip = filter_var(trim($_POST['zip']), FILTER_SANITIZE_STRING); 
   
    }

    if(empty($nombre)){
        echo json_encode(array(
            'error' => true,
            'campo' => 'nombre'
        ));
        return;
    }

    if(empty($apellido)){
        echo json_encode(array(
            'error' => true,
            'campo' => 'apellido'
        ));
        return;
    }
    if(empty($email)){
        echo json_encode(array(
            'error' => true,
            'campo' => 'email'
        ));
        return;
    }
    if(empty($password)){
        echo json_encode(array(
            'error' => true,
            'campo' => 'password'
        ));
        return;
    }
    if(empty($ciudad)){
        echo json_encode(array(
            'error' => true,
            'campo' => 'ciudad'
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
    if(empty($telefono)){
        echo json_encode(array(
            'error' => true,
            'campo' => 'telefono'
        ));
        return;
    }
    if(empty($zip)){
        echo json_encode(array(
            'error' => true,
            'campo' => 'zip'
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
    

    $query = "INSERT INTO clientes (id_usuario, nombre, apellido, email, password, telefono, ciudad, estado, zip) VALUES (NULL,'$nombre','$apellido','$email','$password','$telefono','$ciudad','$estado','$zip')";
    $run = mysqli_query($conn, $query) or die (mysqli_error());
    if($run){
      echo 'data submitted';
    } else {
      echo 'data was not submitted';
    }

    
    
  }
  header('Location: login-projects.html');

?>