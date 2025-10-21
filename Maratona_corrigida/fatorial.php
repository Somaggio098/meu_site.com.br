<?php
$n = 5;
$fatorial = 1;
for ($i = $n; $i > 1; $i---) {
    $fatorial*= $i;
}
echo "Fatorial de $n é $fatorial";
?>