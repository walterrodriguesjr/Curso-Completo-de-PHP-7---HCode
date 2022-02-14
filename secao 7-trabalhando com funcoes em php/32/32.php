<?php

function ola()
{
    return "Olá mundo!<hr>";
}
echo ola();

function dadosPessoais($nome, $idade, $cidade)
{
    echo "Meu nome é " . $nome . " , tenho " . $idade . " anos de idade e moro na cidade de " . $cidade . ".<hr>";
}

dadosPessoais("Walter", 35, "Curitiba");
dadosPessoais("Charlene", 33, "Itapeva");
