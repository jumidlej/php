<?php
  interface EletronicoInterface {
    public function ligar();
    public function desligar();
  }

  class Geladeira implements EletronicoInterface {
    public function abrirPorta() {
      echo 'abrir porta <br/>';
    }

    public function ligar() {
      echo 'ligar <br/>';
    }

    public function desligar() {
      echo 'desligar <br/>';
    }
  }

  class TV implements EletronicoInterface {
    public function trocarCanal() {
      echo 'trocar canal <br/>';
    }

    public function ligar() {
      echo 'ligar <br/>';
    }

    public function desligar() {
      echo 'desligar <br/>';
    }
  }

  $x = new Geladeira();
  $x->ligar();
  $x->desligar();
  $x->abrirPorta();

  $y = new TV();
  $y->trocarCanal();

  //----------------------------------
  interface MamiferoInterface {
    public function respirar();
  }

  interface TerrestreInterface {
    public function andar();
  }

  interface AquaticoInterface {
    public function nadar();
  }

  class Humano implements MamiferoInterface, TerrestreInterface {
    public function respirar() {
      echo 'respirar';
    }

    public function andar() {
      echo ' andar';
    }

    public function conversar() {
      echo 'conversar';
    }
  }

  //--------------------------
  interface AnimalInterface {
    public function comer();
  }

  interface AveInterface extends AnimalInterface {
    public function voar();
  }

  class Papagaio implements AveInterface {
    public function voar() {
      echo 'voar';
    }

    public function comer() {
      echo 'comer';
    }
  }
?>