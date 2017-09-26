<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>MDIFICAR</title>
  </head>
  <body>
    <?php
    $id= $_POST['id_proveedor'];
    $name= $_POST['nro_orden'];
    $last= $_POST['ruc'];
    $email= $_POST['razon_social'];
    $gender= $_POST['fecha_orden'];
    $pass= $_POST['monto_total'];
    $rol= $_POST['fecha_entrega'];

    $conex= mysqli_connect("localhost","root","","sesiones");

    mysqli_query($conex, " UPDATE proveedor SET nro_orden='$name', ruc='$last',
      razon_social='$email', fecha_orden='$gender', monto_total='$pass', fecha_entrega='$rol' WHERE id_proveedor='$id' ")
      or die ("ERROR AL MODIFICAR!");

      mysqli_close($conex);
      header("Location: proveedor.php");
     ?>

  </body>
</html>
