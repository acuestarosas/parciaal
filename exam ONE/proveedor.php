<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body> 
    <h1> PROVEDOR!!!</h1>

    <h4>Registrar datos de la tabla proveedor</h4>
    <form class="" action="registroproveedor.php" method="post">

      <input type="text" name="nro_orden" placeholder="ORDEN" >
      <input type="text" name="ruc" placeholder="RUC" >
      <input type="text" name="razon_social" placeholder="RAZON SOCIAL" >
      <input type="datetime-local" name="fecha_orden" placeholder="FECHA ORDEN">
      <input type="text" name="monto_total" placeholder="TOTAL">
      <input type="datetime-local" name="fecha_entrega" placeholder="FECHA ENTREGA">

      <br><input type="submit" name="" value="REGISTRARSE! ">
    </form>
~~~~~~~~~~~~~~~~~ ** ~~~~~~~~~~~~~~~~~  ~~~~~~~~~~~~~~~~~ ** ~~~~~~~~~~~~~~~~~ ** ~~~~~~~~~~~~~~~~~
      <h4>Modificar datos de la tabla proveedor</h4>
              <form class="" action="editproveedor.php" method="post">
                <form class="" action="registroproveedor.php" method="post">

                  <input type="text" name="id_proveedor" placeholder="ID DEL PROVEEDOR A MODIFICAR"=""><br>
                  <input type="text" name="nro_orden" placeholder="ORDEN" >
                  <input type="text" name="ruc" placeholder="RUC" >
                  <input type="text" name="razon_social" placeholder="RAZON SOCIAL" >
                  <input type="datetime-local" name="fecha_orden" placeholder="FECHA ORDEN">
                  <input type="text" name="monto_total" placeholder="TOTAL">
                  <input type="datetime-local" name="fecha_entrega" placeholder="FECHA ENTREGA">

                <br><br><input type="submit" name="btnSuprimir" value="MODIFICAR">
              </form>
~~~~~~~~~~~~~~~~~ ** ~~~~~~~~~~~~~~~~~ ** ~~~~~~~~~~~~~~~~~ ** ~~~~~~~~~~~~~~~~~ ** ~~~~~~~~~~~~~~~~~
    <h4>Eliminar datos de la tabla proveedor</h4>
         <form class="" action="deleteproveedor.php" method="post">
           <input type="text" name="id_proveedor" placeholder="# DE ELIMINACI#N DE LA ORDEN">

           <br><input type="submit" name="btnSuprimir" value="Eliminar"><br>
         </form>
~~~~~~~~~~~~~~~~~ ** ~~~~~~~~~~~~~~~~~  ~~~~~~~~~~~~~~~~~ ** ~~~~~~~~~~~~~~~~~ ** ~~~~~~~~~~~~~~~~~
   <h4>tabla proveedor</h4>
         <center>
           <table bgcolor="#e580ff"  border="10">
             <td colspan="8"> <p>  <strong> TABLA PROVEEDOR </strong> </p></td>
           <thead>
             <tr> </thead>
                 <tbody>
                   <tr>
                     <td># ORDEN</td>
                     <td>RUC</td>
                     <td>RAZON SOCIAL</td>
                     <td>GENDER</td>
                     <td>FECHA ORDEN</td>
                     <td>TOTAL $$$</td>
                     <td>FECHA ENTREGA</td>
                   </tr>

                   <?php
                     $conex= mysqli_connect("localhost","root","","sesiones");
                     $query= "SELECT * FROM proveedor";
                     $resultado = mysqli_query($conex,"SELECT * from proveedor");
                     while ($row= mysqli_fetch_array($resultado) ) {
                   ?>
                       <tr>
                         <td> <?php  echo $row['id_proveedor'];  ?> </td>
                         <td> <?php  echo $row['nro_orden'];  ?> </td>
                         <td> <?php  echo $row['ruc'];  ?> </td>
                         <td> <?php  echo $row['razon_social'];  ?> </td>
                         <td> <?php  echo $row['fecha_orden'];  ?> </td>
                         <td> <?php  echo $row['monto_total'];  ?> </td>
                         <td> <?php  echo $row['fecha_entrega'];  ?> </td>
                       </tr>
                   <?php
                     }
                   ?>

        </tbody>
      </table>
    </center>
  </body>
</html>
