<?php

    echo "<h2>INformaçôes do Acesso</h2>"

    $ip = $_SERVER['REMOTE_ADDR'];
    $navegador = $_SERVE['HTTP_USER_AGENT'];
    $servidor = gethostbyname();
    $versaoPHP = phpversion();

    echo "🤑 IP do usuário: " . $ip . "<br>";
    echo "🌐 Navegador: " . $navegador . "<br>";
    echo "🖥️ Nome do servidor: " . $servidor . "<br>";
    echo "⚙️ Versão do PHP: " . $versaoPHP . "<br>";