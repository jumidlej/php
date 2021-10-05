<?php
  session_start();

  $titulo = str_replace('#', '-', $_POST['titulo']); 
  $categoria = str_replace('#', '-', $_POST['categoria']); 
  $descrição = str_replace('#', '-', $_POST['descrição']); 

  $texto = implode('#', $_POST);
  $texto = $_SESSION['usuario_id'] . '#' . $texto . PHP_EOL;

  $arquivo = fopen('arquivo.hd', 'a');
  fwrite($arquivo, $texto);
  fclose($arquivo);

  header('Location: abrir_chamado.php');
?>