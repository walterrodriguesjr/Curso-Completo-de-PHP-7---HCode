<?php

class Documento
{
    private $numero;

    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }
}

$cpf = new Documento();
$cpf->setNumero("34040011848");

var_dump($cpf->getNumero());
