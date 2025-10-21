<?php
    $idade = 25;
    unset($idade);

    var_dump(isset($idade)); // saída: bool(false)
?>
