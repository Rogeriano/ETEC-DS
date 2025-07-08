<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercicio 5</title>
</head>
<body>
    <form method="POST">
        <p>População do país A:</p>
        <input type="number" name="populacaoA" required>

        <p>População do país B:</p>
        <input type="number" name="populacaob" required>

        <p>Taxa de crescimento de A (%):</p>
        <input type="number" name="taxaA" required>

        <p>Taxa de crescimento de B (%):</p>
        <input type="number" name="taxaB" required>

        <button type="submit">Calcular</button><hr>

    </form>

    <?php

        $populacaoA = $_POST["popA"];
        $populacaoB = $_POST["popB"];
        $taxaA = $_POST["taxaA"];
        $taxaB = $_POST["taxaB"];
        $anos = 0;


        while ($populacaoA < $populacaoB) {
            $populacaoA = $populacaoA + ($populacaoA * $taxaA);
            $populacaoB = $populacaoB + ($populacaoB * $taxaB);
            $anos++;

            if ($anos > 10000) {
                return;
            }
        }

        if ($anos <= 10000) {
            echo "<p> Levará $anos anos para que a população de A ultrapasse ou iguale a de B</p>";
            echo "<p>População A: $populacaoA </p>";
            echo "<p>População B: $populacaoB </p>";
        } else {
            echo "<p> A população de A não ultrapassará a de B em um período medio.</p>";
        }
    
    
    ?>

</body>
</html>
