<?php
    //Esta é uma função
    //inicio da função saudação
function saudacao($nome) {
    return "Olá, $nome!<br>";
}
    //fim da função saudação
echo saudacao("Somaggio");
    //Definição da função
    function nomeDafuncao($parametro1, $parametro2) {
        //código que será executado
        $resultado = $parametro1 + $parametro2;
        return $parametro1 + $parametro2; // retorna um valor 
    }
    //Chamada da função
    $soma = nomeDafuncao(5, 10);
    echo "O resultado é:" . $soma;
?>