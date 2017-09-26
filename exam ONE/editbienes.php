<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>MODIFICAR</title>
  </head>
  <body>
    <?php
    $id= $_POST['id_bienes'];
    $name= $_POST['desripcion'];
    $last= $_POST['tipo'];

    $conex= mysqli_connect("localhost","root","","sesiones");

    mysqli_query($conex, " UPDATE bienes SET desripcion='$name', tipo='$last' WHERE id_bienes='$id' ")
      or die ("ERROR AL MODIFICAR!");

      mysqli_close($conex);
      header("Location: bienes.php");
     ?>

  </body>
</html>
