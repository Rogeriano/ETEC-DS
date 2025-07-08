<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 02</title>
</head>
<body>
    
<form method="POST">
    <p>Digite um número: <input type="number" name="numero" required></p>
    <Input type="submit" value="Verificar"/>
</form>

<?php

$num = $_POST['numero'];

if ($num !== null) {
    if ($num > 0) {
        echo "$num é positivo.";

    } elseif ($num < 0) {
        echo "$num é negativo.";

    } else {
        echo "O número é zero.";
    }
}
?>

</body>
</html>