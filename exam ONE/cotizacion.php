<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>COTIZACION</title>
  </head>
  <body>
    <h3>TABLA DE COTIZACION</h3>
      <center>

        <table bgcolor="#e580ff"  border="10">
          <td colspan="7"> <p>  <strong> TABLA DE COTIZACION </strong> </p></td>
        <thead>
          <tr> </thead>
              <tbody>
                <tr>
                  <td>ID COTIZACION</td>
                  <td>FECHA</td>
                  <td>ID RESPONSABLE</td>
                  <td>ID SOLICITUD</td>
                </tr>

                <?php
                  $conex= mysqli_connect("localhost","root","","sesiones");
                  $query= "SELECT * FROM cotizacion";
                  $resultado = mysqli_query($conex,"SELECT * from cotizacion ");
                  while ($row= mysqli_fetch_array($resultado) ) {
                ?>
                    <tr>
                      <td> <?php  echo $row['id_cotizacion'];  ?> </td>
                      <td> <?php  echo $row['fecha'];  ?> </td>
                      <td> <?php  echo $row['id_responsable'];  ?> </td>
                      <td> <?php  echo $row['id_solicitud'];  ?> </td>
                    </tr>
                <?php
                  }
                ?>
            </tbody>
          </table>
        </center>
  </body>
</html>
