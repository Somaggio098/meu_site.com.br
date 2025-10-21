<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="fatorial.php" method=post >
        <label>Numero:</label>
        <input type = "text" name="numero">
        <button type = "submit" >Enviar</button>
</form>
</body>
</html>
<?php
    $resultado= 1;
    $numero =$_POST['numero'];
    for($i= 1; $i <= $numero; $i++){
        $resultado *= $i;
    }
        echo "$numero" = $resultado