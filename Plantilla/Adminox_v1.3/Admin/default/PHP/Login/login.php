<?php
require = 'conexion.php';

$usuario = $mysqli -> query("Select * from Funcionario where usuario = '".$_POST['Usuario']."' and pass = '".$_POST['pass']."'");

if ($usuario -> num_rows == 1) {
  $datos = $usuario->fetch_assoc();
  echo json_encode(array('error' => false));
}else{
  echo json_encode(array('error' => true));
}
$mysqli->close();

 ?>
