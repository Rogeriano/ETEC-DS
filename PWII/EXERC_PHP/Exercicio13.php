<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 13</title>
</head>
<body>
<form method="POST">
  <p>Digite um número (1 a 7): <input type="number" name="dias" required></p>
  <input type="submit" value="Verificar">
</form>

<?php

  $dia = $_POST['dias'];

  if ($dia == 1) echo "1 - Domingo";
  elseif ($dia == 2) echo "2 - Segunda-feira";
  elseif ($dia == 3) echo "3 - Terça-feira";
  elseif ($dia == 4) echo "4 - Quarta-feira";
  elseif ($dia == 5) echo "5 - Quinta-feira";
  elseif ($dia == 6) echo "6 - Sexta-feira";
  elseif ($dia == 7) echo "7 - Sábado";
  else echo "Valor inválido";


?>

</body>
</html>
