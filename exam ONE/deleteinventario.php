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

      $id= $_POST['id_inventario'];
      echo $id;

      mysqli_query($conex, "DELETE from inventario WHERE id_inventario= '$id' ")
        or die ("error delete");

        mysqli_close($conex);
        header("Location: inventario.php");
     ?>

  </body>
</html>
