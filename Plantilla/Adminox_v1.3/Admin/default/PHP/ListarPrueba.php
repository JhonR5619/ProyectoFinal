<?php

  $conexion=mysqli_connect("localhost","root","");
  mysqli_select_db($conexion,"DBVisitor");
  $consulta= "select * from Funcionario";
  $rs=mysqli_query($conexion,$consulta);


  while($row=mysqli_fetch_array($rs))
{
echo json_encode($row);
}
?>