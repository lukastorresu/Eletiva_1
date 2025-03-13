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
    $valor3 = $_POST['valor3'];
    $valor4 = $_POST['valor4'];
    $valor5 = $_POST['valor5'];
    $valor6 = $_POST['valor6'];
    $valor7 = $_POST['valor7'];
    $menor_valor = $valor1;
    $posicao = 1;
    if ($valor2 < $menor_valor){   
      $menor_valor = $valor2;
      $posicao = 2;
    }
    if ($valor3 < $menor_valor){   
      $menor_valor = $valor3;
      $posicao = 3;
    }
    if ($valor4 < $menor_valor){   
      $menor_valor = $valor4;
      $posicao = 4;
    }
    if ($valor5 < $menor_valor){   
      $menor_valor = $valor5;
      $posicao = 5;
    }
    if ($valor6 < $menor_valor){   
      $menor_valor = $valor6;
      $posicao = 6;
    }
    if ($valor7 < $menor_valor){   
      $menor_valor = $valor7;
      $posicao = 7;
    }
    echo "O menor valor é: $menor_valor".'<br>';
    echo "A posição do menor valor na sequência de entrada é: $posicao";

    ?></p>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>