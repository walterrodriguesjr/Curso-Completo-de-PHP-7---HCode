<?php

$condicao = true;

while ($condicao) {
    $numero = rand(1, 10);

    if ($numero === 3) {
        echo "Três";
        $condicao = false;
    }
    echo " " . $numero;
}

echo "<hr>";

$total = 115000;
$desconto = 0.9;

do {
    $total *= $desconto;
} while ($total > 100);
echo $total;
