<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>REGISTRO</title>
  </head>
  <body>
    <?php
    $name= $_POST['codigo_unico'];
    $last= $_POST['id_bienes'];
    $email= $_POST['ubicacion'];
    $gender= $_POST['fecha_ingreso'];
    $pass= $_POST['id_responsable'];

    $conex= mysqli_connect("localhost","root","","sesiones")
      or die ("error conexion =( " );

    $insert= "INSERT INTO inventario (codigo_unico, id_bienes, ubicacion, fecha_ingreso, id_responsable) VALUES('$name', '$last', '$email', '$gender', '$pass') ";
    $result= mysqli_query($conex, $insert)
      or die ("ERROR");

      mysqli_close($conex);
      header("Location: inventario.php");
     ?>

  </body>
</html>
