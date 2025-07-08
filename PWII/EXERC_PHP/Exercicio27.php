<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 27</title>
</head>
<body>

<form method="post">
    <p>KG de Morango: <input type="number" name="morango" required></p>
    <p>KG de Maçã: <input type="number" name="maca" required></p>
    <input type="submit" value="Verificar">
</form>

<?php
    $morango = $_POST['morango'];
    $maca = $_POST['maca'];

    $precoMorango = $morango <= 5 ? 2.5 : 2.2;
    $precoMaca = $maca <= 5 ? 1.8 : 1.5;

    $total = ($morango * $precoMorango) + ($maca * $precoMaca);
    $pesoTotal = $morango + $maca;

    if ($total > 25 || $pesoTotal > 8) {
        $total *= 0.9;
    }

    echo "<p>Total a pagar: R$ " $total"</p>";
?>

</body>
</html>
