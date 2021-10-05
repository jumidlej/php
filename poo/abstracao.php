<?php
  // modelo
  // CamelCase
  class Funcionario {
    // atributos
    public $nome = null;
    public $telefone = null;
    public $numeroFilhos = null;

    function __set($atributo, $valor) {
      $this->$atributo = $valor;
    }

    function __get($atributo) {
      return $this->$atributo;
    }

    /*
    function setNome($nome) {
      $this->nome = $nome;
    }

    function setTelefone($telefone) {
      $this->telefone = $telefone;
    }

    function setNumeroFilhos($numeroFilhos) {
      $this->numeroFilhos = $numeroFilhos;
    }

    function getNome(){
      return $this->nome;
    }

    function getTelefone() {
      return $this->telefone;
    }

    function getNumeroFilhos() {
      return $this->numeroFilhos;
    }
    */

    // métodos
    function resumirCadFunc() {
      return $this->__get('nome') . ' possui ' . $this->numeroFilhos . ' filhos.';
    }

    function modificarNumeroFilhos ($numeroFilhos){
      $this->numeroFilhos = $numeroFilhos;
    }
  }

  $x = new Funcionario();
  $x->__set('nome', 'Ju');
  $x->__set('numeroFilhos', 4);
  echo $x->resumirCadFunc();
  
?>