<?php
$num1 = 1;
$num2 = 1;

echo "$num1, $num2";

while (true){
    $num3 = $num1 + $num2;
    }if ($num3 > 500) {
        return;
    echo ", $num3";
    $num1 = $num2;
    $num2 = $num3;
}
?>