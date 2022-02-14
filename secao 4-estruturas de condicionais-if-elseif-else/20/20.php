<?php

$qualaSuaIdade = 10;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if ($qualaSuaIdade < $idadeCrianca) {
    echo "Criança";
} elseif ($qualaSuaIdade < $idadeMaior) {
    echo "Adolescente";
} elseif ($qualaSuaIdade < $idadeMelhor) {
    echo "Adulto";
} else {
    echo "Idoso";
}

echo "<hr>";

/* OPERADOR TERNÁRIO */

/* se,$qualaSuaIdade for menor que $idadeMaior então "Menor de idade" se não "Maior de idade"; */
echo ($qualaSuaIdade < $idadeMaior) ? "Menor de idade" : "Maior de idade";

echo "<hr>";

/* EXERCÍCIO */
$idade = 65;

if ($idade < 16) {
    echo "Você não pode votar";
} elseif ($idade >= 16 && $idade < 18) {
    echo "Seu voto é opcional";
} elseif ($idade >= 18 && $idade < 65) {
    echo "Seu voto é obrigatório";
} else {
    echo "Seu voto é opcional";
}
