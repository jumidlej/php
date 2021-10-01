<html>
  <head>
    <meta charset="utf-8">
    <title>Curso PHP</title>
  </head>
  <body>
    <?php
      # arrays sequenciais (numéricos)
      // $lista_frutas = array('banana', 'maça', 'uva', 'morango');
      $lista_frutas = ['banana', 'maça', 'uva', 'morango'];
      $lista_frutas[] = 'abacaxi';

      echo '<pre>';
        var_dump($lista_frutas);
      echo '</pre';

      echo '<hr/>';

      echo '<pre>';
      print_r($lista_frutas);
      echo '</pre>';

      echo $lista_frutas[2];

      # arrays associativos
      $lista_nomes = array(
        'ju' => 'juliana',
        'nick' => 'monick',
        'jacqueline',
      );
      $lista_nomes[] = 'maria';

      echo '<pre>';
        var_dump($lista_nomes);
      echo '</pre';

      echo '<hr />';

      echo '<pre>';
      print_r($lista_nomes);
      echo '</pre>';

      echo $lista_nomes['ju'];

      # arrays multidimensionais
      $lista_coisas = [];

      $lista_coisas['frutas'] = $lista_frutas;
      $lista_coisas['nomes'] = $lista_nomes;

      echo '<pre>';
        var_dump($lista_coisas);
      echo '</pre';

      echo '<hr />';

      echo '<pre>';
      print_r($lista_coisas);
      echo '</pre>';

      echo '<hr/>';
      echo $lista_coisas['nomes'][0];

      # pesquisa em array
      # in_array retorna true or false
      echo '<hr/>';
      echo 'in_array()';
      echo '<hr/>';
      echo in_array('banana', $lista_coisas['frutas']);
      echo '<hr/>';
      echo in_array('nick', $lista_nomes);

      # array_search retorna índice or null
      echo '<hr/>';
      echo 'array_search()';
      echo '<hr/>';
      echo array_search('banana', $lista_frutas);
      echo '<hr/>';
      echo array_search('nick', $lista_nomes);
     
    ?>
  </body>
</html>