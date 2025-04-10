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
  <h1>Exercício 4 - Verificar se data é válida.</h1>
  <p>

  <form method="post" action="resposta.php">
    <div class="row">
      <div class="col-2">
        <label for="dia" class="form-label">Digite o dia:</label>
        <input type="text" id="dia" name="dia" class="form-control" required="">
      </div>
      <div class="col-2">
        <label for="mes" class="form-label">Digite o mês:</label>
        <input type="text" id="mes" name="mes" class="form-control" required="">
      </div><div class="col-2">
        <label for="ano" class="form-label">Digite o ano:</label>
        <input type="text" id="ano" name="ano" class="form-control" required="">
      </div>

    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>

  </p>
  </h1>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>