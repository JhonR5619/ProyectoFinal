<?php

  session_start();

  if (isset($_SESSION['user_id'])) {
    header('Location: index.php');
  }
  require 'database.php';

  if (!empty($_POST['usuario']) && !empty($_POST['password'])) {
    $usuario=$_POST['usuario'];
    $consulta="SELECT IdFuncionario, IdPermiso, Usuario, pass FROM tbfuncionario WHERE Usuario = '$usuario'";
    $records = $conn->prepare($consulta);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (count($results) > 0 && $_POST['password'] == $results['pass']) {
      $_SESSION['user_id'] = $results['IdFuncionario'];

      header("Location: index.php");
    } else {
      $message = 'Error, datos no validos';
    }
  }

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Visitor</title>
    <link rel="stylesheet" href="assets/css/Login.css">
  </head>
  <body>

      <form action=""  class="col-md-6 col-xs-3" id="formLogin" name="formLogin">
        <h2>Formulario de Login </h2>
        <input type="text" placeholder="&#128273; Usuario" name="usuario" id="usuario">
        <input type="password" placeholder="&#128274; Contraseña" name="password" id="password">
        <input type="submit" name="" value="Ingresar" id="btnIngresar" name="btnIngresar">

      </form>




  </body>
</html>
