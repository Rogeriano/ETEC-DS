<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 14</title>
</head>
<body>

<form method="POST">
  <p>Digite a primeira nota: <input type="number" name="nota1" required></p>
  <p>Digite a segunda nota: <input type="number" name="nota2"  required></p>
  <input type="submit" value="Verificar">
</form>

<?php

  $nota1 = $_POST['nota1'];
  $nota2 = $_POST['nota2'];

  $media = ($nota1 + $nota2) / 2;

  if ($media >= 9.0 && $media <= 10.0) {
    $nota = "A";
    $status = "APROVADO";
  } elseif ($media >= 7.5 && $media < 9.0) {
    $nota = "B";
    $status = "APROVADO";
  } elseif ($media >= 6.0 && $media < 7.5) {
    $nota = "C";
    $status = "APROVADO";
  } elseif ($media >= 4.0 && $media < 6.0) {
    $nota = "D";
    $status = "REPROVADO";
  } else {
    $nota = "E";
    $status = "REPROVADO";
  }

  echo "Primeira nota: $nota1<br>";
  echo "Segunda nota: $nota2<br>";
  echo "Média: $media<br>";
  echo "Nota:  $nota<br>";
  echo "Status: $status";

?>

</body>
</html>
