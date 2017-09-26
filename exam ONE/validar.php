<?php

  session_start();

  $conex= mysqli_connect("localhost","root","","sesiones");

    $user= $_POST['alias'];
    $pass= $_POST['password'];

    $sql= "SELECT * FROM login WHERE name='$user' and password='$pass'  ";
    $result= mysqli_query($conex, $sql);

    if (mysqli_num_rows($result) > 0 ) {
      $_SESSION['alias']= $user;
      echo $_SESSION['password'];
      header("Location: tabla.php");
      echo 1;
    } else {
      echo 0;
    }
    session_destroy();
 ?>
