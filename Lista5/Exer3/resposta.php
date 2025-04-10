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
    $produtos = $_POST['produtos'] ?? [];
    $mapaProdutos = array();

    foreach ($produtos as $produto) {
      $codigo = $produto['codigo'];
      $nome = $produto['nome'];
      $preco = floatval($produto['preco']);

      if ($preco > 100) {
        $preco *= 0.9;
      }
      $mapaProdutos[$codigo] = array(
        'nome' => $nome,
        'preco' => $preco
      );
    }

    uasort($mapaProdutos, function ($a, $b) {
      return strcmp($a['nome'], $b['nome']);
    });

    echo "<ul>";
    foreach ($mapaMedias as $nome => $media) {
      echo "<li><strong>$nome:</strong> " . number_format($media, 1) . "</li>";
    }
    echo "</ul>";

    ?></p>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>