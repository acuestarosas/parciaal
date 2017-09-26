<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CARGGO</title>
  </head>
  <body>
    <h3>TABLA DE CARGOS</h3>
      <center>

        <table bgcolor="#e580ff"  border="10">
          <td colspan="3"> <p>  <strong> TABLA DE CARGOS </strong> </p></td>
        <thead>
          <tr> </thead>
              <tbody>
                <tr>
                  <td>ID CARGO</td>
                  <td>DESCRIPCION</td>
                  <td>JEFEAREA</td>
                </tr>

                <?php
                  $conex= mysqli_connect("localhost","root","","sesiones");
                  $query= "SELECT * FROM cargo";
                  $resultado = mysqli_query($conex,"SELECT * from cargo ");
                  while ($row= mysqli_fetch_array($resultado) ) {
                ?>
                    <tr>
                      <td> <?php  echo $row['id_cargo'];  ?> </td>
                      <td> <?php  echo $row['descripcion'];  ?> </td>
                      <td> <?php  echo $row['jefearea'];  ?> </td>
                    </tr>
                <?php
                  }
                ?>
            </tbody>
          </table>
        </center>
  </body>
</html>
