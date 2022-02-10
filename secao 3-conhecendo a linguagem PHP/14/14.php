<?php

/* USO DE CONCATENAÇÃ0 */

$nomeCompleto = "Walter Rodrigues Junior";
$cidade = "Itapeva";
$anoNascimento = 1986;

$frase = "Meu nome é " . $nomeCompleto . ", moro na cidade de " . $cidade . " e nasci no ano de " . $anoNascimento . ".";

/* USO DE UNSET E ISSET PARA RETIRAR VALOR DA VARIÁVEL E VERIFICAR SE ELE EXISTE */

unset($cidade);

if (isset($cidade)) {
    echo $frase;
} else {
    echo "Existem dados faltando";
}

echo "<hr>";

/* TIPO DE VARIÁVEIS  */
/* TIPOS PRIMITIVOS */

$nome = "Walter";
$sobreNome = "Rodrigues";
$idade = 35;
$altura = 1.72;
$ensinoSuperior = true;


if (isset($nome, $sobreNome, $idade, $altura, $ensinoSuperior)) {
    echo $descricao = "Meu nome é " . $nome . " " . $sobreNome . " , tenho " . $idade . " anos de idade, minha altura é de " . $altura . "cm e minha escolaridade é " . $ensinoSuperior . " . ";
} else {
    echo "Existem dados faltando!";
}

echo "<hr>";

                        /* TIPOS COMPOSTOS */

$frutas = array("Abacaxi", "Maçã", "Laranja", "Pera");   
echo "<pre>";
print_r($frutas);
echo "</pre>";

echo "<hr>";

$anoNascimento = new DateTime();
var_dump($anoNascimento);
echo "<hr>";

$arquivo = fopen("14.php", "r");
var_dump($arquivo);
echo "<hr>";

$nulo = null;
$vazio = "";



