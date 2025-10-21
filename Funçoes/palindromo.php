<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteio da Rifa</title>
</head>
<body style="text-align:center; font-family:Arial; padding-top:50px;">

    <h1>Sorteio da Rifa</h1>

    <?php
        // Gera um número aleatório entre 1 e 1000
        $numero_sorteado = rand(1, 1000);
        echo "<h2>O número sorteado é: <strong>$numero_sorteado</strong></h2>";
    ?>

    <br>
    <button onclick="location.reload();">Sortear Novo Número</button>

    <?php
    date_default_timezone_set('America/Sao_Paulo');
    echo "Data atual:  " . date('d/m/Y') . "<br>";
    echo "Hora atual: " . date('H:i:s') . "<br>";
    echo "Daqui a 7 dias: " . date('d/m/Y', strtotime('+7 days'));
?>


</body>
</html>