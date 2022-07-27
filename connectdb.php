 <?php
 $conn=mysqli_init();
 mysqli_ssl_set($conn,NULL,NULL, "ssl/BaltimoreCyberTrustRoot.crt.pem",NULL,NULL);
 mysqli_real_connect($conn, "database-alpes.mysql.database.azure.com", "administrador@database-alpes", "Salemthecat1", "produccion-alpes", 3306,
    MYSQLI_CLIENT_SSL) or die ("Error al conectar " . mysqli_error());
/* $servername = "localhost";
$username = "root";
$password = "";
$database = "produccion-alpes";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

echo "connected successfully"; */
?> 