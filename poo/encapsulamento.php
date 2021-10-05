<?php
  class Pai {
    // disponivel só pra propria classe
    private $nome = 'welds';
    // disponível para propria classe e classes filhas
    protected $sobrenome = 'araujo';
    // disponivel pra todo mundo
    public $humor = 'trabainu';

    public function __set($atributo, $valor) {
      $this->$atributo = $valor;
    }

    public function __get($atributo){
      return $this->$atributo;
    }
    
    private function executarMania(){
      echo 'assobiar <br/>';
    }

    protected function responder(){
      echo 'oi <br/>';
    }

    public function executarAcao(){
      $this->executarMania();
      $this->responder();
    }
  }

  class Filho extends Pai {
    public function __construct(){
      echo '<pre>';
      print_r(get_class_methods($this));
      echo '</pre>';
    }

    public function __set($atributo, $valor) {
      $this->$atributo = $valor;
    }

    public function __get($atributo){
      return $this->$atributo;
    }

    private function executarMania(){
      echo 'cantar <br/>';
    }

    protected function responder(){
      echo 'ola <br/>';
    }

    // public function executarAcao(){
    //   $this->executarMania();
    //   $this->responder();
    // }
  }

  /*
  $pai = new Pai();

  echo $pai->humor . '<br/>';

  $pai->humor = 'triste';
  echo $pai->humor . '<br/>';

  // echo $pai->nome;
  echo $pai->nome . '<br/>';
  $pai->nome = 'um nome';
  echo $pai->nome . ' ' . $pai->sobrenome . '<br/>';

  // $pai->executarMania();
  $pai->executarAcao();
  */

  $filho = new Filho();

  echo '<pre>';
  print_r($filho);
  echo '</pre>';

  $filho->__set('nome', 'novo nome');

  echo '<pre>';
  print_r($filho);
  echo '</pre>';

  echo '<pre>';
  print_r(get_class_methods($filho));
  echo '</pre>';

  echo $filho->__get('nome') . '<br/>';

  $filho->executarAcao();
  // $filho->executarMania();

?>