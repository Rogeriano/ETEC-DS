<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 21</title>
</head>
<body>

<form method="POST">
    <p>Digite o valor do saque (mínimo 10, máximo 600): <input type="number" name="valor" required></p>
    <input type="submit" value="Verificar">
</form>

<?php


    $valor = $_POST['valor'];

    
    $valor = $valor % 100;
    $valor = $valor % 50;
    $valor = $valor % 10;
    $valor = $valor % 5;

    $notas_1 = $valor;

    echo "<p>Notas fornecidas:</p>";
    if ($notas_100 > 0) echo "$notas_100 nota(s) de 100 reais <br>";
    if ($notas_50 > 0) echo "$notas_50 nota(s) de 50 reais <br>";
    if ($notas_10 > 0) echo "$notas_10 nota(s) de 10 reais <br>";
    if ($notas_5 > 0) echo "$notas_5 nota(s) de 5 reais <br>";
    if ($notas_1 > 0) echo "$notas_1 nota(s) de 1 real <br>";

?>

</body>
</html>
