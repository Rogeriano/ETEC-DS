<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 24</title>
</head>
<body>

<h2>Escolha a operação</h2>

<form method="POST">
    <p>Digite o primeiro número: <input type="number" name="numero1" required></p>
    <p>Digite o segundo número: <input type="number" name="numero2" required></p>
    <p>Escolha a operação:
        <select name="operacao">
            <option value="soma">Soma</option>
            <option value="subtracao">Subtração</option>
            <option value="multiplicacao">Multiplicação</option>
            <option value="divisao">Divisão</option>
        </select>
    </p>
    <input type="submit" value="Calcular">
</form>

<?php
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $operacao = $_POST['operacao'];

    
    if ($operacao == 'soma') {
        $resultado = $numero1 + $numero2;
    } elseif ($operacao == 'subtracao') {
        $resultado = $numero1 - $numero2;
    } elseif ($operacao == 'multiplicacao') {
        $resultado = $numero1 * $numero2;
    } elseif ($operacao == 'divisao') {
        $resultado = $numero2 != 0 ? $numero1 / $numero2 : "Erro: Divisão por zero!";
    }

    
    echo "<p>Resultado: $resultado</p>";

    
    if ($resultado % 2 == 0) {
        echo "<p>O número $resultado é PAR.</p>";
    } else {
        echo "<p>O número $resultado é ÍMPAR.</p>";
    }

    
    if ($resultado > 0) {
        echo "<p>O número $resultado é POSITIVO.</p>";
    } elseif ($resultado < 0) {
        echo "<p>O número $resultado é NEGATIVO.</p>";
    } else {
        echo "<p>O número $resultado é ZERO.</p>";
    }

    
    if ($resultado == (int)$resultado) {
        echo "<p>O número $resultado é INTEIRO.</p>";
    } else {
        echo "<p>O número $resultado é DECIMAL.</p>";
    }

?>

</body>
</html>
