<?php
require "funcoes.php";

    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];

    if ($a == 0){
        echo "não é uma equação do segundo grau";
    }

            $delta = delta($a, $b, $c);

            if ($delta < 0){
                echo "não é possivel calcular bhaskara";

            }

            if($delta >= 0){
                $x1 = x1($a, $b, $delta);
                $x1f = number_format($x1,2,',','.');
                $x2 = x2($a, $b, $delta);
                $x2f = number_format($x2,2,',','.');
                echo "os valores digitados foram $a, $b, $c, e as raizea são $x1f e $x2f.";
            }