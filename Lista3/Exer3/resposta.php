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
    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];
    $menor_valor = $valor1;
    $maior_valor = $valor2;
    if ($valor1 == $valor2){
      echo "O valores são iguais: $valor1";
    }elseif ($valor2 < $menor_valor){   
      $menor_valor = $valor2;
      $maior_valor = $valor1;
      echo "Os valores em ordem crescente é: $menor_valor $maior_valor";
    }else{
      $menor_valor = $valor1;
      $maior_valor = $valor2;
      echo "Os valores em ordem crescente é: $menor_valor $maior_valor";
    }
    
    ?></p>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>