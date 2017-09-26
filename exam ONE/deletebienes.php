<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ELIMINAR</title>
  </head>
  <body>

    <?php
      $conex= mysqli_connect("localhost","root","","sesiones")
        or die ("error de COnexion :(");

      $id= $_POST['id_bienes'];
      echo $id;

      mysqli_query($conex, "DELETE from bienes WHERE id_bienes= '$id' ")
        or die ("error delete");

        mysqli_close($conex);
        header("Location: bienes.php");
     ?>

  </body>
</html>
