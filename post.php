<?php

//POST recebe a variavél por função
    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];
    $sinal = $_POST['sinal' ];

    $resultado = $valor1.$sinal.$valor2;
    echo $resultado;
    // o sinal de + é transferido normalmente em POST
     if($sinal == "*"){
        echo "=" . $valor1 *  $valor2;
    }
     if($sinal == "+"){
        echo "=" . $valor1 + $valor2;
     }
     if($sinal == "/"){
        echo "=" . $valor1 / $valor2;
     }
     if($sinal == "-"){
        echo "=" . $valor1 - $valor2;
     }
