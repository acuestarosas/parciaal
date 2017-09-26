<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>MDIFICAR</title>
  </head>
  <body>
    <?php
    $id= $_POST['id'];
    $name= $_POST['alias'];
    $last= $_POST['app'];
    $email= $_POST['correo'];
    $gender= $_POST['genero'];
    $pass= $_POST['password'];
    $rol= $_POST['rolo'];

    $conex= mysqli_connect("localhost","root","","sesiones");

    mysqli_query($conex, " UPDATE login SET name='$name', lastname='$last', email='$email', gender='$gender', password='$pass', Rol_Seleccionado='$rol' WHERE id='$id' ")
      or die ("ERROR AL MODIFICAR!");

      mysqli_close($conex);
      header("Location: tabla.php");
     ?>

  </body>
</html>
