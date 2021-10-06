<?php

  class ExceptionCustom extends Exception {
    private $erro = '';

    public function __construct($erro) {
      $this->erro = $erro;
    }

    public function exibirMensagem() {
      return $this->erro;
    }
  }

  try {
    echo 'try <br/>';

    // $sql = 'Select * from clientes';
    // mysql_query($sql); // Erro

    if (!file_exists('require_arquivo.php')){
      throw new ExceptionCustom('O arquivo não existe!');
      // throw new Error('O arquivo não existe!');
    }

  } catch (Error $e) {
    echo 'catch error <br/>';
    echo $e . '<br/>';
  } catch (ExceptionCustom $e) {
    echo 'catch exception <br/>';
    echo $e->exibirMensagem() . '<br/>';    
  }
  finally {
    echo 'finally';
  }

?>