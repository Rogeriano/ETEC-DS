<?php
echo "<h2>Números ímpares de 1 a 50:</h2>";

for ($i = 1; $i <= 50; $i++) {
    if ($i % 2 == 0) {
        echo "$i<br>";
    }
}
?>