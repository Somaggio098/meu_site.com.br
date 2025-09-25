<?php
function conecta($usuario, $Senha) {
    if ($usuario == "admin" && $Senha == "1234") {
        header("Location: painel.php");
        exit;
    } else {
        $msg = urlencode("Usuário ou senha inválidos!");
        header("Location: index.php?msg=$msg");
        exit;
    }

}
?>