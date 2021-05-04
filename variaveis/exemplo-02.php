<?php

/*
$anoNascimento = 1999;

$nomeCompleto = "";*/
//Na linha de baixo temos uma variÃ¡vel com nÃºmerono nome

$nome1 = "JoÃ£o";

$sobrenome = "Rangel";


// Concatenando duas strings
$nomeCompleto = $nome1 . " " . $sobrenome;

echo $nomeCompleto;

exit;

echo $nome1;

echo "<br/>";

unset($nome1); // limpar variavel

if (isset($nome1)) { // verificar se variavel existe.

    echo $nome1;

}

?>