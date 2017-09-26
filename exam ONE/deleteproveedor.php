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

      $id= $_POST['id_proveedor'];
      echo $id;

      mysqli_query($conex, "DELETE from proveedor WHERE id_proveedor= '$id' ")
        or die ("error delete");

        mysqli_close($conex);
        header("Location: proveedor.php");
     ?>

  </body>
</html>
