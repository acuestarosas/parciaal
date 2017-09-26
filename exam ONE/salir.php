<?php

session_start();

unset($_SESSION['alias'] );
unset($_SESSION['password'] );

header("Location: LOGIN.php");

 ?>
