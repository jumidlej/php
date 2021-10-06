<?php
  namespace A;
  class Cliente implements \B\CadastroInterface{
    public $nome = 'Juliana';

    public function __construct() {
      echo '<pre>';
      print_r(get_class_methods($this));
      echo '</pre>';
    }

    public function __get($atributo) {
      return $this->$atributo;
    }

    public function salvar() {
      echo 'salvar';
    }

    public function remover() {
      echo 'remover';
    }
  }

  interface CadastroInterface {
    public function salvar();
  }

  namespace B;
  class Cliente implements CadastroInterface {
    public $nome = 'Monick';

    public function __construct() {
      echo '<pre>';
      print_r(get_class_methods($this));
      echo '</pre>';
    }

    public function __get($atributo) {
      return $this->$atributo;
    }

    public function remover() {
      echo 'remover';
    }
  }

  interface CadastroInterface {
    public function remover();
  }

  $c = new \A\Cliente();
  print_r($c);
  echo $c->__get('nome');

?>