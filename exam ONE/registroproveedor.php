<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>REGISTRO</title>
  </head>
  <body>
    <?php
    $name= $_POST['nro_orden'];
    $last= $_POST['ruc'];
    $email= $_POST['razon_social'];
    $gender= $_POST['fecha_orden'];
    $pass= $_POST['monto_total'];
    $rol= $_POST['fecha_entrega'];

    $conex= mysqli_connect("localhost","root","","sesiones")
      or die ("error conexion =( " );

    $insert= "INSERT INTO proveedor (nro_orden, ruc, razon_social, fecha_orden, monto_total, fecha_entrega) VALUES('$name', '$last', '$email', '$gender', '$pass', '$rol') ";
    $result= mysqli_query($conex, $insert)
      or die ("ERROR");

      mysqli_close($conex);
      header("Location: proveedor.php");
     ?>

  </body>
</html>
