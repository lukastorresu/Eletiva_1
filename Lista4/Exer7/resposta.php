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
    function calcDiferencaDatas($data1, $data2){
      $data1 = DateTime::createFromFormat('dd/mm/YYYY', $data1);
      $data2 = DateTime::createFromFormat('dd/mm/YYYY', $data2);

    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $data1 = $_POST['data1'];
      $data2 = $_POST['data2'];
      $diferenca = calcDiferencaDatas($data1, $data2);
      echo 'A diferença em dias é' . $diferenca . ".";
    }
    ?></p>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>