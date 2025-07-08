<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 16</title>
</head>
<body>

<form method="POST">
    <p>Valor de A: <input type="number" name="a"  required></p>
    <p>Valor de B: <input type="number" name="b"  required></p>
    <p>Valor de C: <input type="number" name="c"  required></p>
    <input type="submit" value="Verificar">
</form>

<?php
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];

    if ($a == 0) {
        echo "<p>Não é uma equação do segundo grau.</p>";
    } else {
        $delta = $b * $b - 4 * $a * $c;

    if ($delta < 0) {
        echo "<p>A equação não possui raízes reais.</p>";
    } elseif ($delta == 0) {
        $raiz = -$b / (2 * $a);
        echo "<p>A equação possui uma raiz real: $raiz</p>";
    } else {
        echo "<p>A equação possui duas raízes reais.</p>";
    }
}
?>

</body>
</html>
