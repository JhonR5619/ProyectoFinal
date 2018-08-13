<?php

$usuario = $_POST['usuario'];
$pass=$_POST['pass'];

$conexion=mysqli_connect("localhost:8080","root","","DBVisitor");

if ($mysqli->connect_error) {
 die("La conexion falló: " . $mysqli->connect_error);
}

function VerificacionDatos(){
  try {
  if (!Empty($usuario) && !Empty($usuario)) {
  $arrUsuarios = array();
  $tmp= new usuario();
  $getTempUser= $tmp->getRows("Select * from Funcionario where Usuario = "$usuario);
  if (count($getRows) >= 1) {
      $getRows= $tmp->getRows("Select * from Funcionario where Usuario = "$usuario "and pass="$pass);
    if (count($getRows >= 1)) {
      foreach ($getRows as $valor) {
        echo $valor;
      }
    }else {
      echo "Datos no validos";
      }
  }

    }else{
      echo "Datos vacios, por favor verifiquelos ";
      }
    } catch (\Exception $e) {
  }
}
?>
