<?php

$populacaoA = 80000;
$populacaoB = 200000;


$taxaA = 0.03;
$taxaB = 0.015;

$anos = 0;

while ($populacaoA < $populacaoB) {
    $populacaoA = $populacaoA + ($populacaoA * $taxaA);
    $populacaoB = $populacaoB + ($populacaoB * $taxaB);
    $anos++;
}

echo "Anos para a população A ultrapassar ou igualar a B: $anos anos <br>";
echo "População A após $anos anos: $populacaoA <br>";
echo "População B após $anos anos:  $populacaoB <br>";

?>
