<?php
    function saudacao($nome){
        return "Seja bem vindo, $nome! <br>";
    }
    function conecta($usuario, $senha){
        if ($usuario === 'admin' && $senha === '1234'){
            header('Location: painel.php');
        } else {
            $msg = "Usuário ou senha inválidos!";
            header('Location: index.php?msg=' . urlencode($msg));
        }
    }  


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="nota.php">calcular nota</a>
</body>
</html>