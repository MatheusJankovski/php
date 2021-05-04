<?php

$nome = "Glaucio";

function teste() { // escopo 1

    global $nome; // váriavel sendo chamada pelo parametro global
    echo $nome;

}

function teste2() { // escopo 2

    $nome = "Joao"; // variavel local do escopo 2

    echo $nome."agora no teste2";

}

teste();
teste2();

?>