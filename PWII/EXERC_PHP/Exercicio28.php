<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 28</title>
</head>
<body>

    <form method="post">
        <label>Tipo de Carne:</label>
        <select name="carne" required>
            <option value="file">Filé Duplo</option>
            <option value="alcatra">Alcatra</option>
            <option value="picanha">Picanha</option>
        </select><br><br>

        <label>Quantidade (kg):</label>
        <input type="number" name="quantidade" required><br><br>

        <label>Usar Cartão Tabajara?</label>
        <select name="cartao" required>
            <option value="sim">Sim</option>
            <option value="nao">Não</option>
        </select><br><br>

        <input type="submit" value="Verificar">
    </form>

<?php

    $carne = $_POST["carne"];
    $quantidade = $_POST["quantidade"];
    $usaCartao = $_POST["cartao"];


    if ($carne == "file") {
        $tipo = "Filé Duplo";
        $preco = $quantidade <= 5 ? 4.90 : 5.80;
    } elseif ($carne == "alcatra") {
        $tipo = "Alcatra";
        $preco = $quantidade <= 5 ? 5.90 : 6.80;
    } else {
        $tipo = "Picanha";
        $preco = $quantidade <= 5 ? 6.90 : 7.80;
    }

    $total = $quantidade * $preco;
    $desconto = $usaCartao ? $total * 0.05 : 0;
    $totalFinal = $total - $desconto;

    echo "<h3>Cupom Fiscal</h3>";
    echo "Tipo de carne: $tipo<br>";
    echo "Quantidade: $quantidade kg<br>";
    echo "Preço total: R$ " . number_format($total, 2, ',', '.') . "<br>";
    echo "Pagamento com cartão Tabajara: " . ($usaCartao ? "Sim" : "Não") . "<br>";
    echo "Desconto: R$ " . number_format($desconto, 2, ',', '.') . "<br>";
    echo "<strong>Valor a pagar: R$ " . number_format($totalFinal, 2, ',', '.') . "</strong><br>";

?>
</body>
</html>
