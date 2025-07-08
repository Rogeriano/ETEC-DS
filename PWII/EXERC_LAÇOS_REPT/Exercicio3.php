<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Exercicio 3</title>
</head>
<body>

<form method="POST">
    <p>Nome: <input type="text" name="nome" required></p>
    <p>Idade: <input type="number" name="idade" required></p>
    <p>Salário: <input type="number" name="salario" required></p>
    <p>Sexo: <input type="text" name="sexo" required placeholder="f ou m"> </p>
    <p>Estado Civil: <input type="text" name="estado_civil"  required placeholder="s, c, v ou d"></p>
    <input type="submit" value="Validar">
</form>
<?php


$nome = $_POST["nome"];
$idade = $_POST["idade"];
$salario = $_POST["salario"];
$sexo = $_POST["sexo"];
$ec = $_POST["estado_civil"];

while (strlen($nome) <= 3){
    echo "Digite o nome com mais que 3 caracteres ";
}
while ( $idade < 0 || $idade > 150) {
    echo "Idade invalida. Deve ser um numero entre 0 e 150 ";
}

while ($salario <= 0) {
    echo "Salário inválido. Deve ser maior que 0 ";
}

while ($sexo != 'f' && $sexo != 'm') {
    echo "Sexo inválido. Digite 'f' para feminino ou 'm' para masculino.";
    return;
while ($ec == 's' || $ec == 'c' || $ec == 'd' || $ec == 'v') {
    if ($ec == 's') {
        echo "Solteiro\n";
    } elseif ($ec == 'c') {
        echo "Casado\n";
    } elseif ($ec == 'd') {
        echo "Divorciado\n";
    } elseif ($ec == 'v') {
        echo "Viúvo\n";
    }else{
        echo "Letra inválida";
    }
}
}
echo "\nDados válidos:\nNome: $nome\nIdade: $idade\nSalário: $salario\nSexo: $sexo\nEstado civil: $ec\n";
?>
</body>
</html>