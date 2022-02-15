<?php

require_once "./config.php";
require_once "./class/Cadastro.php";

use Cliente\Cadastro;

$cad = new Cadastro();
$cad->setNome("Djalma Sindeaux");
$cad->setemail("sjalma@hcode.com.br");
$cad->setSenha("123456");

echo $cad->registrarVenda();
