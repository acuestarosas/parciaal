<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>REGISTRO</title>
  </head>
  <body>

    <?php
    $name= $_POST['desripcion'];
    $last= $_POST['tipo'];

    $conex= mysqli_connect("localhost","root","","sesiones")
      or die ("error conexion =( " );

    $insert= "INSERT INTO bienes (desripcion, tipo) VALUES('$name', '$last') ";
    $result= mysqli_query($conex, $insert)
      or die ("ERROR");

      mysqli_close($conex);
      header("Location: bienes.php");
     ?>

  </body>
</html>
