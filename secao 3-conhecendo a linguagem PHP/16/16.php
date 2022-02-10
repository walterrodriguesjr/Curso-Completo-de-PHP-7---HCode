<?php

$nome = "Walter";

function teste()
{
    global $nome;
    echo $nome;
}

function teste2()
{
    $nome = "João";
    echo $nome . " agora no teste 2";
}

function teste3(){
    global $cidade;
    $cidade = "Curitiba";
    echo $cidade;
}

teste();
echo "<hr>";
teste2();
echo "<hr>";
teste();
echo "<hr>";
echo $nome;
echo "<hr>";
teste3();

