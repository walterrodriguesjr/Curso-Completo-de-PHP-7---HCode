<?php

define("SERVIDOR", "127.0.0.1");

echo SERVIDOR;
echo "<hr>";
define("BANCO_DE_DADOS", [
    '127.0.0.1',
    'root',
    'password',
    'test'
]);

print_r(BANCO_DE_DADOS);
echo "<hr>";

echo PHP_VERSION;
?>