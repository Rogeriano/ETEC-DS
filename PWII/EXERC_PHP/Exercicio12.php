<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 12</title>
</head>
<body>

<form method="POST">
    <p>Valor da hora: <input type="number" name="valor" required></p>
    <p>Horas no mês: <input type="number" name="horas" required></p>
    <input type="submit" value="Verificar"><hr>
</form>

<?php

  $vl = $_POST['valor'];
  $hr = $_POST['horas'];
  $bruto = $vl * $hr;

  if ($bruto <= 2259.20) $ir = 0;
  elseif ($bruto <= 2826.65) $ir = $bruto * 0.075;
  elseif ($bruto <= 3751.05) $ir = $bruto * 0.15;
  elseif ($bruto <= 4664.68) $ir = $bruto * 0.225;
  else $ir = $bruto * 0.275;


  $sind = $bruto * 0.03;
  $fgts = $bruto * 0.08;
  $desc = $ir + $sind;
  $liq = $bruto - $desc;

  
  echo "Bruto: R$ $bruto<br>";
  echo "IR: R$ $ir<br>";
  echo "Sindicato: R$ $sind<br>";
  echo "FGTS: R$ $fgts<br>";
  echo "Descontos: R$ $desc<br>";
  echo "Líquido: R$ $liq";

?>

</body>
</html>
