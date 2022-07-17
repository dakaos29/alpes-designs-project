<?php
include('connectdb.php');
$email=$_POST['email'];
$password=$_POST['password'];
session_start();
$_SESSION['email']=$email;


$conexion=mysqli_connect("localhost","root","","produccion-alpes");

$consulta="SELECT*FROM clientes where email='$email' and password='$password'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
  header('Location: see-project.php');

}else{
    ?>
    <?php
    include('login-projects.html');

  ?>
  <h2 class="bad">Authentication Error</h2>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);