<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 08</title>
</head>
<body>

<form method="POST">
    <p>Digite o primeiro número: </p>
        <input type="number" name="num1" required>
    <p>Digite o segundo número: </p>
        <input type="number" name="num2" required>
    <p>Digite o terceiro número: </p>
        <input type="number" name="num3" required>
    <p>Digite o quarto número: </p>
        <input type="number" name="num4" required>
    <p>Digite o quinto número: </p>
        <input type="number" name="num5" required>
    <input type="submit" value="Calcular"><br><hr><br>
</form>

<?php
    $n1 = $_POST["num1"];
    $n2 = $_POST["num2"];
    $n3 = $_POST["num3"];
    $n4 = $_POST["num4"];
    $n5 = $_POST["num5"];

    $soma = $n1 + $n2 + $n3 + $n4 + $n5;

    $media = $soma / 5;

    echo "<p>Soma dos números: $soma </p>";
    echo "<p>Média dos números: $media </p>";

?>

</body>
</html>
