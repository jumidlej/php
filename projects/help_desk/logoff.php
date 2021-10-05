<?php
  session_start();
  // echo '<pre>';
  // print_r($_SESSION);
  // echo '</prep>';
  // remover indices do array de sessao
  // unset()
  // unset($_SESSION['x']); // remove o indice apenas se existir

  // echo '<pre>';
  // print_r($_SESSION);
  // echo '</prep>';

  // destruir a variavel de sessao
  // session_destroy()
  session_destroy();
  header('Location: index.php');

  // echo '<pre>';
  // print_r($_SESSION);
  // echo '</prep>';
?>