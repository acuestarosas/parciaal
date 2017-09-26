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

      $id= $_POST['id'];
      echo $id;

      mysqli_query($conex, "DELETE from login WHERE id= '$id' ")
        or die ("error delete");

        mysqli_close($conex);
        header("Location: tabla.php");
     ?>

  </body>
</html>
