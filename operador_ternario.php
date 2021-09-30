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

      // <condicao> ? true : false

      $desconto_frete = ($cartao_loja AND $valor_compra > 200 == true) ? true : false;

      echo $desconto_frete ? "Recebeu desconto no frete" : "Não recebeu desconto!";
    ?>
    
  </body>
</html>