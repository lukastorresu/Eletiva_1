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
    switch ($valor1) {
      case 1:
        echo "Janeiro";
        break;
      case 2:
        echo "Fevereiro";
        break;
      case 3:
        echo "Março";
        break;
      case 4:
        echo "Abril";
        break;
      case 5:
        echo "Maio";
        break;
      case 6:
        echo "Junho";
        break;
      case 7:
        echo "Julho";
        break;
      case 8:
        echo "Agosto";
        break;
      case 9:
        echo "Setembro";
        break;
      case 10:
        echo "Outubro";
        break;
      case 11:
        echo "Novembro";
        break;
      case 12:
        echo "Dezembro";
        break;
      default:
        echo "Mês inválido.";
        break;
    }
    
    ?></p>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>