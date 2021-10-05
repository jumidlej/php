<html>
  <head>
    <meta charset="utf-8">
    <title>Curso PHP</title>
  </head>
  <body>
    <?php
      $cartao_loja = true;
      $valor_compra = 199.99;
      $valor_frete = 50.00;
      // $desconto_frete = false;

      if ($cartao_loja == true AND $valor_compra > 150) {
        $valor_frete = 0.00;
        $desconto_frete = true;
      }

      
      if ($desconto_frete) {
        echo "Recebeu desconto no frete";
      }
    ?>
    
  </body>
</html>