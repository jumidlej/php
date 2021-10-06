<?php
  require 'bibliotecas/lib1/lib1.php';
  require 'bibliotecas/lib2/lib2.php';

  use A\Cliente as ClienteA;
  use B\Cliente as ClienteB;

  $c = new ClienteA();
  echo $c->__get('nome');

  $c = new ClienteB();
  echo $c->__get('nome');
?>