<?php
$feriado = false;
$fimDeSemana = true;

if ($feriado == true || $fimDeSemana == true) {
    echo "Pode descansar.";
} else {
    echo "Dia útil de trabalho";
}
?>