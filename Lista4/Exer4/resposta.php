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
    function validarData($dia, $mes, $ano)
    {
      return checkdate($mes, $dia, $ano);
    }

    $dia = $_POST['dia'] ?? 0;
    $mes = $_POST['mes'] ?? 0;
    $ano = $_POST['ano'] ?? 0;
    
    if (validarData($dia, $mes, $ano)) {
      echo sprintf("%02d/%02d/%04d", $dia, $mes, $ano);
    } else {
      echo "Data inválida";
    }
    ?></p>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>