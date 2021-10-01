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

      foreach($registros as $noticia) {
        foreach($noticia as $idx => $item){
          echo $idx . ': ' . $item . '<br/>';
        }
      }

    ?>
  </body>
</html>