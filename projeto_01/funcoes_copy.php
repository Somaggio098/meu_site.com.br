<?php
function nota($nota) {

    if ($nota >= 7) {
        echo "Aprovado com $nota.<br>";
    }
    if ($nota >= 5 && $nota < 7) {
        echo "Recuperação com $nota.<br>";
    } else {
        echo "Reprovado com $nota.<br>";
    }

}
?>