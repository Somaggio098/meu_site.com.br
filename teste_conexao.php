<?php

require "funcoes.php";
$nome_db = "Mongo";
$msg = banco_dados("$nome_db,");
echo $msg;