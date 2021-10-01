<html>
  <head>
    <meta charset="utf-8">
    <title>Curso PHP</title>
  </head>
  <body>
    <?php
      # is_array
      $array = [];
      $retorno = is_array($array);

      if($retorno){
        echo 'Sim';
      } else {
        echo 'Não';
      }

      # array_keys
      $var = [1 => 4, 5 => 3, 6 => 8];
      $chaves = array_keys($var);

      echo '<pre>';
        print_r($chaves);
      echo '</pre>';

      # sort: retorna true or false
      $array = ['teclado', 'mouse', 'alguma coisa', 'fonte'];

      sort($array);

      echo '<pre>';
        print_r($array);
      echo '</pre>';

      # asort: retorna true or false
      asort($var);
      echo '<pre>';
        print_r($var);
        echo count($var);
      echo '</pre>';

      # array_merge
      $array1 = ['osx', 'windows'];
      $array2 = array('linux', 'ava');
      $array3 = ['solaris'];

      $merge_array = array_merge($array1, $array2, $array3);
      echo '<pre>';
        print_r($merge_array);
      echo '</pre>';

      # explode
      $string = '23-23-23';
      $retorno = explode('-', $string);
      
      echo '<pre>';
        print_r($retorno);
      echo '</pre>';

      # implode
      $retorno = implode(',', $array);
      echo '<pre>';
        print_r($retorno);
      echo '</pre>';
     
    ?>
  </body>
</html>