<?php

class Pessoa
{
    public $nome = "Walter";
    protected $idade = 35;
    private $senha = "123456";

    public function verDados()
    {
        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->senha . "<br>";
    }
}

$objeto = new Pessoa();
/* echo $objeto->senha . "<br>"; */

$objeto->verDados();
