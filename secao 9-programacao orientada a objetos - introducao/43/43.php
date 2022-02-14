<?php

class Carro
{
    private $modelo;
    private $motor;
    private $ano;

    public function getModelo():string
    {
        return $this->modelo;
    }

    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    public function getMotor():float
    {
        return $this->motor;
    }
    public function setMotor($motor)
    {
        $this->motor = $motor;
    }
    public function getAno():int
    {
        return $this->ano;
    }
    public function setAno($ano)
    {
        $this->ano = $ano;
    }

    public function exibir()
    {
        return array(
            "Modelo" => $this->getModelo(),
            "Motor" => $this->getMotor(),
            "Ano" => $this->getAno(),
        );
    }
}

$gol = new Carro();
$gol->setModelo("Gol GT");
$gol->setMotor("1.6");
$gol->setAno("2017");

var_dump($gol->exibir());
