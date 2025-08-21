<?php

    $pessoa = ["nome" => "Somaggio", "idade" => 30];
    echo "Meu nome é $pessoa[nome] e eu tenho $pessoa[idade] anos";
   
?>
<p> olá aqui é um HTML:</p>
<?php
    $aluno=["nome" => "Somaggio", "idade" => 16, "nota"=> 100];
    echo"Olá $aluno[nome], você tem $aluno[idade] anos e sua nota é $aluno[nota]";
    $ano= 2025-$aluno["idade"];
    echo("<p>E você nasceu em" . $ano . ".</p>");
    $dataatual = date("d/m/y");
    $horatual = date("H:i:s");
    echo "hoje é $dataatual e são $horatual";
    $dia = date('j');
    echo "<p> Hoje, $dia é dia nacional da Habitação </p>";
    $hora= date('H:i');
    echo "São extamente $hora";

?>