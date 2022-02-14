<?php

$dataAtual = date("d/m/Y");

echo "A data atual é " . $dataAtual . "<hr>";

$horaAtual = date("H:i:s");
echo "A hora atual é " . $horaAtual . "<hr>";

$ts = strtotime("2022-02-12");
echo date("d/m/Y", $ts);
