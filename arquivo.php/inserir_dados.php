<?php
    $arquivo = fopen("arquivo.txt", "a"); 
    fwrite($arquivo, "Primeira linha de texto\n");
    fclose($arquivo);
    echo "Arquivo alterado com sucesso!";

?>
