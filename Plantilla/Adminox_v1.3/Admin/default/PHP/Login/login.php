<?php
login();
?>

<?php

$host_db = "localhost";
$user_db = "root";
$pass_db = "";
$db_name = "DBVisitor";
$tbl_name = "Usuarios";

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM tbFuncionario WHERE usuario = '$usuario'";

$result = $conexion->query($sql);


if ($result->num_rows > 0) {
 }
 $row = $result->fetch_array(MYSQLI_ASSOC);
 if (password_verify($pass, $row['pass'])) {

    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    $_SESSION['start'] = time();
    $_SESSION['expire'] = $_SESSION['start'] + (5 * 60); 
    header("location:index.php");

 } else {
   echo "Username o Password estan incorrectos.";

   echo "<br><a href='login.php'>Volver a Intentarlo</a>";
 }
 mysqli_close($conexion);
 ?>
