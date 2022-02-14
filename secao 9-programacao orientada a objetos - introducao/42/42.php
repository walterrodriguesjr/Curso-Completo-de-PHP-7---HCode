<?php

class Pessoa
{
    public $nome;

    public function falar()
    {
        return "O meu nome é " . $this->nome . ".";
    }
}

$glaucio = new Pessoa();
$glaucio->nome = "Walter";
echo $glaucio->falar();
