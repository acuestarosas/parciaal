<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1> INVENTARIO</h1>

    <h4>Registrar datos del inventario</h4>
    <form class="" action="registroinventario.php" method="post">

      <input type="text" name="codigo_unico" placeholder="CODIGO" >
      <input type="text" name="id_bienes" placeholder="ID DEL BIEN" >
      <input type="text" name="ubicacion" placeholder="UBICACION" >
      <input type="date" name="fecha_ingreso" placeholder="FECHA INGRESO">
      <input type="text" name="id_responsable" placeholder="ID RESPONSABLE">


      <br><input type="submit" name="" value="AÑADIR AL INVENTARIO">
    </form>
~~~~~~~~~~~~~~~~~ ** ~~~~~~~~~~~~~~~~~  ~~~~~~~~~~~~~~~~~ ** ~~~~~~~~~~~~~~~~~ ** ~~~~~~~~~~~~~~~~~
      <h4>Modificar datos de la tabla inventario</h4>
              <form class="" action="editinventario.php" method="post">
                <form class="" action="registroinventario.php" method="post">

                  <input type="text" name="id_inventario" placeholder="ID DEL INVENTARIO A MODIFICAR"=""><br>
                  <input type="text" name="codigo_unico" placeholder="CODIGO" >
                  <input type="text" name="id_bienes" placeholder="ID DEL BIEN" >
                  <input type="text" name="ubicacion" placeholder="UBICACION" >
                  <input type="date" name="fecha_ingreso" placeholder="FECHA INGRESO">
                  <input type="text" name="id_responsable" placeholder="ID RESPONSABLE">

                <br><br><input type="submit" name="btnSuprimir" value="MODIFICAR INVENTARIO">
              </form>
~~~~~~~~~~~~~~~~~ ** ~~~~~~~~~~~~~~~~~ ** ~~~~~~~~~~~~~~~~~ ** ~~~~~~~~~~~~~~~~~ ** ~~~~~~~~~~~~~~~~~
    <h4>Eliminar datos de la tabla proveedor</h4>
         <form class="" action="deleteINVENTARIO.php" method="post">
           <input type="text" name="id_inventario" placeholder="# DE ELIMINACI#N DE LA ORDEN">

           <br><input type="submit" name="btnSuprimir" value="Eliminar"><br>
         </form>
~~~~~~~~~~~~~~~~~ ** ~~~~~~~~~~~~~~~~~  ~~~~~~~~~~~~~~~~~ ** ~~~~~~~~~~~~~~~~~ ** ~~~~~~~~~~~~~~~~~
   <h4>tabla DEL INVENTARIO</h4>
         <center>
           <table bgcolor="#e580ff"  border="10">
             <td colspan="8"> <p>  <strong> TABLA INVENTARIO </strong> </p></td>
           <thead>
             <tr> </thead>
                 <tbody>
                   <tr>
                     <td>ID</td>
                     <td>CODIGO</td>
                     <td>ID_BIEN</td>
                     <td>UBICACION</td>
                     <td>FECHA INGRESO</td>
                     <td>ID RESPONSABLE</td>
                   </tr>

                   <?php
                     $conex= mysqli_connect("localhost","root","","sesiones");
                     $query= "SELECT * FROM inventario";
                     $resultado = mysqli_query($conex,"SELECT * from inventario");
                     while ($row= mysqli_fetch_array($resultado) ) {
                   ?>
                       <tr>
                         <td> <?php  echo $row['id_inventario'];  ?> </td>
                         <td> <?php  echo $row['codigo_unico'];  ?> </td>
                         <td> <?php  echo $row['id_bienes'];  ?> </td>
                         <td> <?php  echo $row['ubicacion'];  ?> </td>
                         <td> <?php  echo $row['fecha_ingreso'];  ?> </td>
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
