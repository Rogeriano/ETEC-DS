<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 11</title>
</head>
<body>

<form method="POST">
    <p>Digite o primeiro número: </p>
        <input type="number" name="num1" required>
    <p>Digite o segundo número: </p>
        <input type="number" name="num2" required>
    <input type="submit" value="Verificar"><br><hr><br>
</form>

<?php

$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$soma = 0;

if ($num1 < $num2) {
    for ($i = $num1 + 1; $i < $num2; $i++) {
        echo "$i ";
        $soma = $soma + $i;
    }
} else {
    for ($i = $num2 + 1; $i < $num1; $i++) {
        echo "$i ";
        $soma = $soma + $i;
    }
}
        echo "<br>Soma dos números: $soma";

?>
</body>
</html>