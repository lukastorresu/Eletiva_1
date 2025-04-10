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
    $alunos = $_POST['alunos'] ?? [];
    $mapaMedias = array();
    $nomesCadastrados = array();

    foreach ($alunos as $aluno) {
      $nome = $aluno['nome'];
      $notas = $aluno['notas'];

      if (!in_array($nome, $nomesCadastrados)) {
        $media = array_sum($notas) / count($notas);
        $mapaMedias[$nome] = $media;
        $nomesCadastrados[] = $nome;
      } else {
        echo "<p style='color: red;'>Aviso: Aluno ($nome) duplicado.</p>";
      }
    }

    ksort($mapaContatos);
    echo "<ul>";
    foreach ($mapaContatos as $nome => $telefone) {
      echo "<li><strong>$nome:</strong> $telefone</li>";
    }
    echo "</ul>";

    ?></p>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>