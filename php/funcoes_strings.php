<html>
  <head>
    <meta charset="utf-8">
    <title>Curso PHP</title>
  </head>
  <body>
    <?php

      $texto = "cuRSO completo DE PHP R$ 22,90!";
      echo $texto . "<br/>";
      
      echo strtolower($texto) . "<br/>";
      echo strtoupper($texto) . "<br/>";
      echo ucfirst($texto) . "<br/>";
      echo strlen($texto) . "<br/>";
      echo str_replace("completo", "metade", $texto) . "<br/>";
      echo str_replace("P", "IHI", $texto) . "<br/>";
      echo str_replace(",", ".", $texto) . "<br/>";
      // pega parte do texto, do caracter 6, pega 8 caracteres a frente
      echo substr($texto, 6, 8);

    ?>
  </body>
</html>