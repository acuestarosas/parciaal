<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ORDEN COMPRA</title>
  </head>
  <body>
    <h3>TABLA DE COMPRA</h3>
      <center>

        <table bgcolor="#e580ff"  border="10">
          <td colspan="6"> <p>  <strong> TABLA DE LA ORDEN COMPRA </strong> </p></td>
        <thead>
          <tr> </thead>
              <tbody>
                <tr>
                  <td>ID ORDEN COMPRA</td>
                  <td>ID PROVEEDOR</td>
                  <td>ID BIENES</td>
                  <td>APROVADO</td>
                  <td>ID COTIZACION</td>
                  <td>ID RESPONSABLE</td>
                </tr>

                <?php
                  $conex= mysqli_connect("localhost","root","","sesiones");
                  $query= "SELECT * FROM ordencompra";
                  $resultado = mysqli_query($conex,"SELECT * from ordencompra ");
                  while ($row= mysqli_fetch_array($resultado) ) {
                ?>
                    <tr>
                      <td> <?php  echo $row['id_ordencompra'];  ?> </td>
                      <td> <?php  echo $row['id_proveedor'];  ?> </td>
                      <td> <?php  echo $row['id_bienes'];  ?> </td>
                      <td> <?php  echo $row['aprobado'];  ?> </td>
                      <td> <?php  echo $row['id_cotizacion'];  ?> </td>
                      <td> <?php  echo $row['id_responsable'];  ?> </td>
                    </tr>
                <?php
                  }
                ?>
            </tbody>
          </table>
        </center>
  </body>
</html>
