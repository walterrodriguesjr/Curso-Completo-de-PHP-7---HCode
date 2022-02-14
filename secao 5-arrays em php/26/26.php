<?php

$frutas = array("Laranja", "Abacaxi", "melancia");
print_r($frutas);

echo "<hr>";

$carros[0][0] = "GM";
$carros[0][1] = "Cobalt";
$carros[0][2] = "Onix";
$carros[0][3] = "Camaro";

$carros[1][0] = "Ford";
$carros[1][1] = "Fiesta";
$carros[1][2] = "Fusion";
$carros[1][3] = "Eco Sport";

echo $carros[0][3];
echo "<br>";
echo end($carros[1]);

echo "<hr>";

$pessoas = array();

array_push($pessoas, array(
    'nome'=>'Walter',
    'idade'=>35
));
print_r($pessoas);
echo "<hr>";

array_push($pessoas, array(
    'nome'=>'Charlene',
    'idade'=>33
));

print_r($pessoas);
echo "<hr>";
echo json_encode($pessoas);
echo "<hr>";

$json = '[{"nome":"Walter","idade":35},{"nome":"Charlene","idade":33}]';
$data = json_decode($json, true);
var_dump($data);




