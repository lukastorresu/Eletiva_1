<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <h1>Resposta</h1>
  <p>
    <?php
    $livros = $_POST['livros'] ?? [];
    $qtde = $_POST['qtde'] ?? 0;
    $mapaLivros = array();

    foreach ($livros as $livro) {
      $titulo = $livro['livro'];
      $qtde = $livro['qtde'];


      $mapaLivros[$titulo] = array(
        'qtde' => $qtde,
        'titulo' => $titulo
      );
    }

    uasort($mapaLivros, function ($a, $b) {
      return $a['titulo'] <=> $b['titulo'];
    });

    echo "<table border='1'>";
    echo "<tr><th>Título</th><th>qtde</th></tr>";
    foreach ($mapaLivros as $livro => $dados) {
      echo "<tr>";
      echo "<td>" . htmlspecialchars($dados['titulo']) . "</td>";
      echo "<td>" . number_format($dados['qtde']) . "</td>";
      echo "</tr>";
    }
    echo "</table>";

    ?></p>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>