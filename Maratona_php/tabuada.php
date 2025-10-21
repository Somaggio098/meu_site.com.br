<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="tabuada.php" method=post >
        <label>Numero:</label>
        <input type = "text" name="numero">
        <button type = "submit" >Enviar</button>
</form>
</body>
</html>
<?php
    $numero =$_POST['numero'];
    for($i= 1; $i <= 10; $i++){
        echo "$numero x $i = " . $numero*$i. "<br>"
    }