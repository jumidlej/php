<html>
  <head>
    <meta charset="utf-8">
    <title>Curso PHP</title>
  </head>
  <body>
    <?php
      $registros = [
        ['titulo' => 'Noticia 1', 'conteudo' => 'Conteúdo 1'],
        ['titulo' => 'Noticia 2', 'conteudo' => 'Conteúdo 2'],
        ['titulo' => 'Noticia 3', 'conteudo' => 'Conteúdo 3']
      ];

      echo '<pre>';
        print_r($registros);
      echo '</pre>';

      $id = 0;
      while($id < count($registros)){
        echo '<h3>' . $registros[$id]['titulo'] . '</h3>';
        echo '<p>' . $registros[$id]['conteudo'] . '</p>';
        $id++;
      }

    ?>
  </body>
</html>