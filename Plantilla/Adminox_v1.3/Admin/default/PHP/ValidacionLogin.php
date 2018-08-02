<?php
  $Usuario=$POST['Usuario'];
  $Contraseña=$POST['Contraseña'];

  //Conectar a la base de datos

  $conexion=mysqli_connect("localhost:8080","root","","BDVisitor");
  $consulta="Select * from Funcionario where Usuario = '$Usuario' and Contraseña = '$Contraseña' ";
  $resultado = mysqli_query($conexion,$consulta);
  $filas = mysql_num_rows($resultado);

  if($filas > 0 ){
    header("location:index.html");
  }




 ?>
