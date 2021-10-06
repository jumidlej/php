<?php
  class Exemplo {
    // métodos estaticos não podem usar this
    public static $atributo1 = 'sou um atributo estatico';
    public $atributo2 = 'sou um atributo normal';

    public static function metodo1() {
      echo 'sou um metodo estatico';
    }

    public function metodo2() {
      echo 'sou um metodo normal';
    }
  }

  echo Exemplo::$atributo1;
  // echo Exemplo::$atributo2;
  echo '<br/>';
  Exemplo::metodo1();
  // Exemplo::metodo2();

  $x = new Exemplo();
  echo '<br/>';
  echo $x::$atributo1;
  // echo '<br/>';
  // echo $x->atributo1;
?>

