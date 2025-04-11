<?php

declare(strict_types=1);
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <h1>Exercício 5 - Cadastrar 5 livros (verificar estoque).</h1>
  <p>

  <form method="post" action="resposta.php">
    <?php for ($i = 1; $i <= 5; $i++): ?>
      <fieldset>
        <legend>Produto <?= $i ?></legend>
        <label for="livro<?= $i ?>">Livro:</label>
        <input type="text" id="livro<?= $i ?>" name="livros[<?= $i ?>][livro]" required>

        <label for="qtde<?= $i ?>">Quantidade:</label>
        <input type="number" id="qtde<?= $i ?>" name="livros[<?= $i ?>][qtde]" min="0" required>
      </fieldset>
    <?php endfor; ?>
    <br>
    <input type="submit" value="Enviar">
  </form>

  </p>
  </h1>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>