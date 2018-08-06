<?php
  $Usuario=$POST['Usuario'];
  $Contraseña=$POST['Contraseña'];

  //Conectar a la base de datos
  $_Session['Usuario']= $Usuario;


  $conexion=mysqli_connect("localhost:8080","root","","BDVisitor");
  $consulta="Select * from Funcionario where Usuario = '$Usuario' and Contraseña = '$Contraseña' ";
  $resultado = mysqli_query($conexion,$consulta);
  $filas = mysql_num_rows($resultado);

  if($filas > 0 ){
    header("location:index.php");
  }else{
    echo "error en la autentificacion, por favor verifique sus datos e intente nuevamente ";
  }
  mysql_free_result($resultado);
  mysqli_close($conexion);




 ?>
