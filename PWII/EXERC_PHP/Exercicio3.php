<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 03</title>
</head>
<body>

<form method="POST">
    <p>Digite o sexo (F ou M): <input type="text" name="sexo" required></p>
    <input type="submit" value="Verificar">
</form>

<?php
$sexo = $_POST['sexo'];

if ($sexo !== null) {

    if ($sexo == 'F' || $sexo == 'f') {
        echo "F - Feminino";
    } elseif ($sexo == 'M' || $sexo == 'm') {
        echo "M - Masculino";
    } else {
        echo "Sexo Inválido";
    }
}
?>

</body>
</html>