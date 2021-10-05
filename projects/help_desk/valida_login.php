<?php
  session_start();

  print_r($_SESSION);
  $_SESSION['autenticado'] = false;
  echo '<hr/>';

  $usuario_autenticado = false;
  $usuario_id = null;
  $perfis = array(1 => 'administrativo', 2 => 'usuário');

  $usuarios = [
    ['id' => 1, 'email' => 'juliana@gmail.com', 'senha' => '1234', 'perfil_id' => 1],
    ['id' => 2, 'email' => 'jmesanto91@gmail.com', 'senha' => '1234', 'perfil_id' => 1],
    ['id' => 3, 'email' => 'jme@gmail.com', 'senha' => '1234', 'perfil_id' => 2],
    ['id' => 4, 'email' => 'santo@gmail.com', 'senha' => '1234', 'perfil_id' => 2]
  ];

  foreach($usuarios as $usuario){
    print_r($usuario);
    echo "<br/>";
    if ($usuario['email']==$_POST['email'] AND $usuario['senha']==$_POST['senha']){
      $usuario_autenticado = true;
      $usuario_id = $usuario['id'];
      $usuario_perfil_id = $usuario['perfil_id'];
    }
  }

  if ($usuario_autenticado) {
    $_SESSION['autenticado'] = true;
    $_SESSION['usuario_id'] = $usuario_id;
    $_SESSION['perfil_id'] = $usuario_perfil_id;
    header('Location: home.php');
    echo $usuario_id;
    echo " Autorizado";
  } else {
    $_SESSION['autenticado'] = false;
    header('Location: index.php?login=error');
    echo "Não autorizado";
  }
  echo "<br/>";

  print_r($_POST);
?>