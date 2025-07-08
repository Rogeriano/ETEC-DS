<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 18</title>
</head>
<body>

<form method="POST">
    <p>Dia: <input type="number" name="dia" required></p>
    <p>Mês: <input type="number" name="mes" required></p>
    <p>Ano: <input type="number" name="ano" required></p>
    <input type="submit" value="Verificar">
</form>

<?php
        $dia = $_POST['dia'];
        $mes = $_POST['mes'];
        $ano = $_POST['ano'];

        if ($dia >= 1 && $dia <= 31 && $mes >= 1 && $mes <= 12 && $ano > 0) {
            echo "<p>A data é válida (verificação simples).</p>";
        } else {
            echo "<p>A data é inválida.</p>";
        }
    
?>

</body>
</html>
