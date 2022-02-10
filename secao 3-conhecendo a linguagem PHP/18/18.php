<?php

$nome = "Walter";
$nome2 = 'Rodrigues';
var_dump($nome, $nome2);
echo "<hr>";
var_dump("Meu nome é " . $nome . " " . $nome2); 
echo "<hr>";

$nome = "Walter rodrigues";
$cidade = "CURITIBA";
$profissao = "policial militar";
echo $nome;
echo "<hr>";
echo strtoupper($nome);
echo "<hr>";
echo strtolower($cidade);
echo "<hr>";
echo ucwords($profissao);
echo "<hr>";
echo ucfirst($profissao);
echo "<hr>";
$cidade = str_replace("U", "O", $cidade);
echo $cidade;
echo "<hr>";
$frase = "A repetição é a mãe da retenção";
$q = strpos($frase, "mãe");
var_dump($q);
echo "<hr>";




?>