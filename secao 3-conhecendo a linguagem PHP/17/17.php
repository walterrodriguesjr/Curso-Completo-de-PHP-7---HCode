<?php

/* OPERADORES DE ATRIBUIÇÃO */
$nome = "Walter";
echo "Meu nome é " . $nome;

echo "<hr>";

$nome .= " Rodrigues";
echo $nome;

echo "<hr>";

$valorTotal = 0;
echo $valorTotal;
echo "<hr>";
$valorTotal += 100;
echo $valorTotal;
echo "<hr>";
$valorTotal -= 10;
echo $valorTotal;
echo "<hr>";
$valorTotal *= 2;
echo $valorTotal;
echo "<hr>";

/* OPERADORES ARITMÉTICOS */

$a = 10;
$b = 2;

echo $a + $b;
echo "<hr>";
echo $a - $b;
echo "<hr>";
echo $a * $b;
echo "<hr>";
echo $a / $b;
echo "<hr>";
echo $a % $b;
echo "<hr>";

/* OPERADORES DE COMPARAÇÃO */

$a = 10;
$b = 5;
$c = "10";

var_dump($a > $b);
echo "<hr>";
var_dump($a !== $b);
echo "<hr>";
var_dump($a === $c);
echo "<hr>";

/* SPACESHIP */

$a = 50;
$b = 35;

var_dump($a <=> $b);
echo "<hr>";

/* NULL */

$a = null;
$b = null;
$c = 10;
echo $a ?? $b ?? $c;
echo "<hr>";

/* OPERADORES INCREMENTAIS E DECREMENTAIS */

$a = 10;
echo $a++;
echo "<hr>";
echo $a;
echo "<hr>";
echo ++$a;
echo "<hr>";

