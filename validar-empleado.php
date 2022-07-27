<?php
include('connectdb.php');
$correo=$_POST['correo'];
$password=$_POST['password'];
session_start();
$_SESSION['correo']=$correo;


// $conn=mysqli_connect("localhost","root","","produccion-alpes");

$consulta="SELECT*FROM empleados where correo='$correo' and password='$password'";
$resultado=mysqli_query($conn,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
  header('Location: projects-options.html');

}else{
    ?>
    <?php
    include('login-projects.php');

  ?>
  <h2 class="bad">Authentication Error</h2>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conn);