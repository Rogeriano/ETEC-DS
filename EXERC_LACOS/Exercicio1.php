<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
    <p>Digite um valor entre 1 e 10: <input type="number" name="nota" required></p>
    <Input type="submit" value="Verificar"/>

</form>



<?php
// Faça um programa que peça uma nota, entre zero e dez. Mostre uma mensagem caso o valor seja inválido e continue pedindo até que o usuário informe um valor válido. //

    $nota = $_POST['nota'];
    while ($nota < 1 || $nota > 10) {
        echo "Nota inválida<br>";
        return;
    }
    echo "Você digitou a nota: $nota<br>";
  
    
?>

</body>
</html>

