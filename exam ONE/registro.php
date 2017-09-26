<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>REGISTRO</title>
  </head>
  <body>
    <?php
    $name= $_POST['alias'];
    $last= $_POST['app'];
    $email= $_POST['correo'];
    $gender= $_POST['genero'];
    $pass= $_POST['password'];
    $rol= $_POST['rolo'];

    $conex= mysqli_connect("localhost","root","","sesiones")
      or die ("error conexion =( " );

    $insert= "INSERT INTO login (name, lastname, email, gender, password, Rol_Seleccionado) VALUES('$name', '$last', '$email', '$gender', '$pass', '$rol') ";
    $result= mysqli_query($conex, $insert)
      or die ("ERROR");

      mysqli_close($conex);
      header("Location: tabla.php");
     ?>

  </body>
</html>
