<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 11</title>
</head>
<body>

<form method="POST">
    <p>Salário: <input type="number" name="salario" required></p>
    <input type="submit" value="Verificar">
</form>

<?php

    $salar = $_POST['salario'];

    if ($salar <= 280) $porc = 20;
    elseif ($salar <= 700) $porc = 15;
    elseif ($salar <= 1500) $porc = 10;
    else $porc = 5;

    $aumento = $salar * $porc / 100;
    $novo = $salar + $aumento;

    echo "Salário antes: R$ $salar <br>";
    echo "Aumento: $porc %<br>";
    echo "Valor do aumento: R$ $aumento <br>";
    echo "Novo salário: R$ $novo";
?>

</body>
</html>
