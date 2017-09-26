<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>MODIFICAR</title>
  </head>
  <body>
    <?php
    $id= $_POST['id_inventario'];
    $name= $_POST['codigo_unico'];
    $last= $_POST['id_bienes'];
    $email= $_POST['ubicacion'];
    $gender= $_POST['fecha_ingreso'];
    $pass= $_POST['id_responsable'];

    $conex= mysqli_connect("localhost","root","","sesiones");

    mysqli_query($conex, " UPDATE inventario SET codigo_unico='$name', id_bienes='$last',
      ubicacion='$email', fecha_ingreso='$gender', id_responsable='$pass' WHERE id_inventario='$id' ")
      or die ("ERROR AL MODIFICAR!");

      mysqli_close($conex);
      header("Location: inventario.php");
     ?>

  </body>
</html>
