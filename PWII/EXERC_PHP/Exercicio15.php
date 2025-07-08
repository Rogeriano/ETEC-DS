<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 15</title>
</head>
<body>


<form method="POST">
  <p>Digite o primeiro lado: <input type="number" name="lado1" required></p>
  <p>Digite o segundo lado: <input type="number" name="lado2" required></p>
  <p>Digite o terceiro lado: <input type="number" name="lado3" required></p>
  <input type="submit" value="Verificar">
</form>

<?php

  $lado1 = $_POST['lado1'];
  $lado2 = $_POST['lado2'];
  $lado3 = $_POST['lado3'];

  if (($lado1 + $lado2 > $lado3) && ($lado1 + $lado3 > $lado2) && ($lado2 + $lado3 > $lado1)) {
    
    if ($lado1 == $lado2 && $lado2 == $lado3) {
      $tipo = "Equilátero";
    } elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
      $tipo = "Isósceles";
    } else {
      $tipo = "Escaleno";
    }

    echo "Os lados formam um triângulo $tipo.";
  } else {
    echo "Os lados não formam um triângulo.";
  }

?>

</body>
</html>
