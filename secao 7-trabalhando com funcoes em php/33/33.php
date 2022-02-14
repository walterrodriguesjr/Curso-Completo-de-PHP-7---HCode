<?php

function dadosBasicos($nome, $sobrenome, $idade, $profissao)
{
    return "Meu nome é " . $nome . " " . $sobrenome . ",  tenho " . $idade . " anos de idade e trabalho como " . $profissao . ".<hr>";
}

echo dadosBasicos("Walter", "Rodrigues", 35, "Policial Militar");

function boasVindas($nome = "Cliente", $periodo = "Bom dia")
{
    return "Olá Sr. " . $nome . " , tenha um/uma " . $periodo . ".<hr>";
}

echo boasVindas();
echo boasVindas("Walter", "Boa noite");
