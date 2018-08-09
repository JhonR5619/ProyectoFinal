<?php
  $usuario=$_GET["usuario"];
  $pass=$_GET["pass"];

  $conexion=mysqli_connect("localhost:8080","root","","DBVisitor");

  if ($mysqli->connect_error) {
   die("La conexion falló: " . $mysqli->connect_error);
  }
  
  $usuario = $mysqli -> query("Select * from Funcionario where usuario   = '"$usuario"' and pass = '"$pass"'");
  $resultado=mysqli_query($conexion,$consulta);

 if($usuario->num_rows == 1){
   header("Location: index.html");  }
 else{
   echo json_encode(array('error'=>true));
 }


 
?>
