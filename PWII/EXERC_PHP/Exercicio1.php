<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 01</title>
</head>
<body>
    
<form method="POST">
    <p>Digite o primeiro número: <input type="number" name="num1" required></p>
    <p>Digite o segundo número: <input type="number" name="num2" required></p><br><hr>
    <Input type="submit" value="Verificar"/>

</form>

<?php

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];

if ($num1 > $num2) {
    echo "O maior número é: $num1";
} elseif ($num2 > $num1) {
    echo "O maior número é: $num2";
} else {
    echo "Os dois números são iguais.";
}
?>

</body>
</html>