<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>TABLA</title>
  </head>
<body>
  <h1>TABLA USUARIOS REGISTRADOS EN LA BASE DE DATOS</h1>
  <center>
    <table bgcolor="#e580ff"  border="10">
      <td colspan="9"> <p>  <strong> USUARIOS REGISTRADOS </strong> </p></td>
      <thead>
        <tr>
      </thead>

      <tbody>
        <tr>
          <td>Id</td>
          <td>NAME</td>
          <td>LAST NAME</td>
          <td>CORREO</td>
          <td>GENDER</td>
          <td>PASSWORD</td>
          <td>______ROL SELECCIONADO POR EL USUARIO______ </td>
          <?php //<td>EDITAR</td>
          //<td>SUPRIMMIR</td>
           ?>
        </tr>

        <?php
          $conex= mysqli_connect("localhost","root","","sesiones");
          $query= "SELECT * FROM login";
          $resultado = mysqli_query($conex,"SELECT * from login");
          while ($row= mysqli_fetch_array($resultado) ) {
        ?>

            <tr>
              <td> <?php  echo $row['id'];  ?> </td>
              <td> <?php  echo $row['name'];  ?> </td>
              <td> <?php  echo $row['lastname'];  ?> </td>
              <td> <?php  echo $row['email'];  ?> </td>
              <td> <?php  echo $row['gender'];  ?> </td>
              <td> <?php  echo $row['password'];  ?> </td>
              <td> <?php  echo $row['Rol_Seleccionado'];  ?> </td>
              
            <//td> <//a href="edit.php? id= <?php //echo $row['id']; ?>">  </a> <///td>
            <//td> <//a href="delete.php? id= <?php //echo $row['id']; ?>"> </a> <///td>

            </tr>

        <?php
          }
        ?>
      </tbody>
    </table>
  </center>
    <a href="index.php? "> Modificar Datos <br> Eliminar Datos <br>Registrar nuevos Datos </a>
    <a href="salir.php"> SALGA DE LA SESION! </a>
  </body>
</html>
