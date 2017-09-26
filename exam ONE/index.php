<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>PLATAFORMA DE USUARIOS</h1>
    <h4>REGISTRY!!!!</h4>
         <form class="" action="registro.php" method="post">

           <input type="text" name="alias" placeholder="NAME" >
           <input type="text" name="app" placeholder="LASTNAME" >
           <input type="text" name="correo" placeholder="EMAIL" >
           <select name="genero" placeholder="GENDER">
             <option value="Femenino">FEMALE</option> <option value="Masculino">masculino</option>
           </select>
           <input type="password" name="password" placeholder="PASSWORD">
           <select name="rolo">
             <option value="Reading">LECTURA <strong>Solo visualiza INENTARIO</strong> </option>
             <option value="Creation">CREACION <strong>Proveedorees y Productos</strong> </option>
             <option value="Edition">EDICION <strong>Inventario, Proveedor, Bienes</strong> </option>
             <option value="Elimination">ELIMINACION <strong>super ROOT</strong></option>
           </select>

           <br><input type="submit" name="login" value="REGISTRARSE! ">
         </form>

~~~~~~~~~~~~~~~~~ ** ~~~~~~~~~~~~~~~~~ ** ~~~~~~~~~~~~~~~~~ ** ~~~~~~~~~~~~~~~~~ ** ~~~~~~~~~~~~~~~~~
         <h4>MODIFICACI%N</h4>
              <form class="" action="edit.php" method="post">
                <form class="" action="registro.php" method="post">

                  <input type="text" name="id" placeholder="ID DEL USUARIO A MODIFICAR"=""><br>
                  <input type="text" name="alias" placeholder="NAME" >
                  <input type="text" name="app" placeholder="APELLIDO" >
                  <input type="text" name="correo" placeholder="EMAIL" >
                  <select name="genero" placeholder="EMAIL">
                    <option value="Femenino">FEMALE</option> <option value="Masculino">masculino</option>
                  </select>
                  <input type="password" name="password" placeholder="PASSWORD">
                  <select name="rolo">
                    <option value="Reading">LECTURA</option>
                    <option value="Creation">CREACION</option>
                    <option value="Edition">EDICION</option>
                    <option value="Elimination">ELIMINACION</option>
                  </select>

                <br><input type="submit" name="btnSuprimir" value="MODIFICAR">
              </form>
~~~~~~~~~~~~~~~~~ ** ~~~~~~~~~~~~~~~~~ ** ~~~~~~~~~~~~~~~~~ ** ~~~~~~~~~~~~~~~~~ ** ~~~~~~~~~~~~~~~~~
    <h4>ELIMINACI"N</h4>
         <form class="" action="delete.php" method="post">
           <input type="text" name="id" placeholder="ID DE ELIMINACI#N">

           <br><input type="submit" name="btnSuprimir" value="Eliminar">
         </form>
~~~~~~~~~~~~~~~~~ ** ~~~~~~~~~~~~~~~~~ ** ~~~~~~~~~~~~~~~~~ ** ~~~~~~~~~~~~~~~~~ ** ~~~~~~~~~~~~~~~~~
<h3>TABLA</h3>
  <center>

    <table bgcolor="#e580ff"  border="10">
      <td colspan="7"> <p>  <strong> USUARIOS REGISTRADOS </strong> </p></td>
    <thead>
      <tr> </thead>
          <tbody>
            <tr>
              <td>Id</td>
              <td>NAME</td>
              <td>LAST NAME</td>
              <td>CORREO</td>
              <td>GENDER</td>
              <td>__ROL SELECCIONADO POR EL USUARIO__</td>
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

                  <td> <?php  echo $row['Rol_Seleccionado'];  ?> </td>
                </tr>
            <?php
              }
            ?>
        </tbody>
      </table>
    </center>
  </body>
</html>
