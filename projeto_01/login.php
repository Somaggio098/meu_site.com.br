<?php
    require_once("funcoes.php"); //inclui o arquivo funcoes.php
    $usuario = $_POST['usuario'] ?? '';
    $senha = $_POST['senha'] ?? '';
    conecta($usuario, $senha); 