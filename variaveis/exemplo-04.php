<?php

$nome = (int)$_GET["a"]; //buscando informação pelo GET e fazendo um cast para converter para inteiro

//var_dump($nome);

$ip = $_SERVER["SCRIPT_NAME"]; //rebendo o nome do script php.

echo $ip;

?>