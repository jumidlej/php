<?php
  session_start();

  if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != true){
    header('Location: index.php?login=error2');
  }
  // print_r($_SESSION);
?>
