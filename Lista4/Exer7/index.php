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
  <h1>Exercício 7 - Calcular diferença datas.</h1>
  <p>

  <form method="post" action="resposta.php">
    <div class="row">
      <div class="col-2">
      <label for="data1">Primeira data (dd/mm/aaaa):</label>
      <input type="text" id="data1" name="data1" placeholder="dd/mm/aaaa" class="form-control" required="">
      </div>
      <div class="col-2">
      <label for="data2">Segunda data (dd/mm/aaaa):</label>
      <input type="text" id="data2" name="data2" placeholder="dd/mm/aaaa" class="form-control" required="">
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>

  </p>
  </h1>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>