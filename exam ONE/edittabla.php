<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    session_start();
     $id= $_REQUEST['id'];//id es el que esta en la linea 47 de tabla!
     $_SESSION['ID']=$id;
     echo $_SESSION['ID'];
      include("conex.php");
      $query= "SELECT * FROM login WHERE id= $'id' ";
      $resultado = mysqli_query($conex,"SELECT * from login");
      $row= mysqli_fetch_array($resultado);
      function bienes($value='')
      {

      }
    ?>

    <h1>MODIFICAR DATOS!</h1>
         <form class="" action="edit.php?" method="post">

           <input type="text" name="alias" placeholder="NAME" value="<?php echo $row['name']; ?>" ><br><br>
           <input type="text" name="app" placeholder="APELLIDO" value="<?php echo $row['lastname']; ?>"><br><br>
           <input type="text" name="correo" placeholder="EMAIL" value="<?php echo $row['email']; ?>"><br><br>
           <input type="text" name="genero" placeholder="GENERO" value="<?php echo $row['gender']; ?>"><br><br>
           <input type="password" name="password" value="<?php echo $row['password']; ?>"> <br><br>
           <input type="text" name="rolo" placeholder="ROL" value="<?php echo $row['Rol_Seleccionado']; ?>" > <br>

           <input type="submit" name="login" value="REGISTRARSE! ">
         </form>

  </body>
</html>
