<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1> BIENES!!!</h1>

    <h4>Registrar datos de la tabla proveedor</h4>
    <form class="" action="registrobienes.php" method="post">

      <input type="text" name="desripcion" placeholder="DESCRIPCION" >
      <input type="text" name="tipo" placeholder="TIPO" >

      <br><input type="submit" name="login" value="Ingreso">
    </form>
~~~~~~~~~~~~~~~~~ ** ~~~~~~~~~~~~~~~~~  ~~~~~~~~~~~~~~~~~ ** ~~~~~~~~~~~~~~~~~ ** ~~~~~~~~~~~~~~~~~
      <h4>Modificar datos de la tabla proveedor</h4>
              <form class="" action="editbienes.php" method="post">
                <form class="" action="registrobienes.php" method="post">

                  <input type="text" name="id_bienes" placeholder="ID DEL bien A MODIFICAR"=""><br>
                  <input type="text" name="desripcion" placeholder="DESCRIPCION" >
                  <input type="text" name="tipo" placeholder="TIPO" >

                <br><br><input type="submit" name="btnSuprimir" value="MODIFICAR">
              </form>
~~~~~~~~~~~~~~~~~ ** ~~~~~~~~~~~~~~~~~ ** ~~~~~~~~~~~~~~~~~ ** ~~~~~~~~~~~~~~~~~ ** ~~~~~~~~~~~~~~~~~
    <h4>Eliminar datos de la tabla proveedor</h4>
         <form class="" action="deletebienes.php" method="post">
           <input type="text" name="id_bienes" placeholder="# DE ELIMINACI#N DE LA propiedad">

           <br><input type="submit" name="btnSuprimir" value="Eliminar"><br>
         </form>
~~~~~~~~~~~~~~~~~ ** ~~~~~~~~~~~~~~~~~  ~~~~~~~~~~~~~~~~~ ** ~~~~~~~~~~~~~~~~~ ** ~~~~~~~~~~~~~~~~~
   <h4>Tabla Bienes</h4>
         <center>
           <table bgcolor="#e580ff"  border="10">
             <td colspan="8"> <p>  <strong> TABLA DE LOS BIENES </strong> </p></td>
           <thead>
             <tr> </thead>
                 <tbody>
                   <tr>
                     <td>ID</td>
                     <td>DESCRIPCION</td>
                     <td>TIPO</td>
                   </tr>

                   <?php
                     $conex= mysqli_connect("localhost","root","","sesiones");
                     $query= "SELECT * FROM bienes";
                     $resultado = mysqli_query($conex,"SELECT * from bienes");
                     while ($row= mysqli_fetch_array($resultado) ) {
                   ?>
                       <tr>
                         <td> <?php  echo $row['id_bienes'];  ?> </td>
                         <td> <?php  echo $row['desripcion'];  ?> </td>
                         <td> <?php  echo $row['tipo'];  ?> </td>
                       </tr>
                   <?php
                     }
                   ?>

        </tbody>
      </table>
    </center>
  </body>
</html>
