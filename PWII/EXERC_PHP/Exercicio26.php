<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 26</title>
</head>
<body>

<form method="POST">
    <p>Quantidade de litros: <input type="number" step="0.01" name="litros" required></p>
    <p>Tipo de combustível (A para Álcool, G para Gasolina): <input type="text" name="tipo"  required></p>
    <input type="submit" value="Verificar">
</form>

<?php
    $litros = $_POST['litros'];
    $tipo = $_POST['tipo'];

    $precoAlcool = 4.00;
    $precoGasolina = 5.50;
    $valorTotal = 0;

    if ($tipo == "A") {
        if ($litros <= 20) {
            $desconto = 0.03 * $precoAlcool;
        } else {
            $desconto = 0.05 * $precoAlcool;
        }
        $valorTotal = $litros * ($precoAlcool - $desconto);

    } elseif ($tipo == "G") {
        if ($litros <= 20) {
            $desconto = 0.04 * $precoGasolina;
        } else {
            $desconto = 0.06 * $precoGasolina;
        }
        $valorTotal = $litros * ($precoGasolina - $desconto);

    } else {
        echo "<p>Tipo de combustível inválido! Use 'A' para Álcool ou 'G' para Gasolina.</p>";
        exit;
    }

    echo "<p>Valor a ser pago: R$ " $valorTotal "</p>";
}
?>

</body>
</html>
