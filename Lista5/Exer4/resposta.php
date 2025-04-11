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
      $nome = $produto['nome'];
      $preco = floatval($produto['preco']);
      $preco *= 1.15;

      $mapaProdutos[$nome] = array(
        'preco' => $preco
      );
    }

    uasort($mapaProdutos, function ($a, $b) {
      return $a['preco'] <=> $b['preco'];
    });

    echo "<table border='1'>";
    echo "<tr><th>Nome</th><th>Preço (R$)</th></tr>";
    foreach ($mapaProdutos as $nome => $dados) {
      echo "<tr>";
      echo "<td>" . htmlspecialchars($dados['nome']) . "</td>";
      echo "<td>" . number_format($dados['preco'], 2, ',', '.') . "</td>";
      echo "</tr>";
    }
    echo "</table>";

    ?></p>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>