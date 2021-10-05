<?php
  class Veiculo {
    public $placa = null;
    public $cor = null;

    function __construct($placa, $cor) {
      $this->placa = $placa;
      $this->cor = $cor;
    }

    function acelerar() {
      echo 'acelerar';
    }

    function trocarMarcha() {
      echo 'trocar marcha';
    }
  }

  class Carro extends Veiculo {
    public $tetoSolar = null;

    function __construct($placa, $cor, $tetoSolar) {
      parent::__construct($placa, $cor);
      $this->tetoSolar = $tetoSolar;
    }

    function abrirTetoSolar() {
      echo 'Abrir teto solar';
    }

    function alterarPosicaoVolante() {
      echo 'Alterar posicao vontale';
    }
  }

  class Moto extends Veiculo {
    public $contraPisoGuidao = null;

    function __construct($placa, $cor, $contraPisoGuidao) {
      parent::__construct($placa, $cor);
      $this->contraPisoGuidao = $contraPisoGuidao;
    }

    function empinar() {
      echo 'empinar';
    }

    function trocarMarcha() {
      echo 'trocar marcha moto';
    }
  }

  $carro = new Carro('1234', 'cor', true);
  $moto = new Moto('1234', 'cor', true);

  echo '<pre>';
  print_r($carro);
  echo '<br/>';
  print_r($moto);
  echo '</pre>';
  echo '<br/>';

  $carro->trocarMarcha();
  echo '<br/>';
  $moto->trocarMarcha();

?>