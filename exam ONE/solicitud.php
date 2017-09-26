<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>SOLICITUD</title>
  </head>
  <body>
    <h3>TABLA DE SOLICITUD</h3>
      <center>

        <table bgcolor="#e580ff"  border="10">
          <td colspan="7"> <p>  <strong> TABLA DE SOLICITUD </strong> </p></td>
        <thead>
          <tr> </thead>
              <tbody>
                <tr>
                  <td>ID SOLICITUD</td>
                  <td>FECHA</td>
                  <td>ID RESPONSABLE</td>
                </tr>

                <?php
                  $conex= mysqli_connect("localhost","root","","sesiones");
                  $query= "SELECT * FROM solicitud";
                  $resultado = mysqli_query($conex,"SELECT * from solicitud ");
                  while ($row= mysqli_fetch_array($resultado) ) {
                ?>
                    <tr>
                      <td> <?php  echo $row['id_solicitud'];  ?> </td>
                      <td> <?php  echo $row['fecha'];  ?> </td>
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
