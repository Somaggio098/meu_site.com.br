<form method="POST">
    <label>Digite um numero:</label>
    <input type="text" name="numero">
    <br>
    <label>Digite a potencia a ser elevada:</label>
    <input type="text" name="potencia">
    <br>
    <input type="submit" value="calcular">
</form>

<?php
$numero = $_POST['numero'] ?? '';
$potencia = $_POST['potencia'] ?? '';
//$n = 5;
    $n = 5;
    echo 'Potencia: ' .pow($numero,$potencia);
?>

