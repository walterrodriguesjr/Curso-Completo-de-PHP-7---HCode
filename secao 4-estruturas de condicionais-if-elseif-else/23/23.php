<?php

$meses = array(
    "Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho",
);

foreach ($meses as $chave => $mes) {
    echo "O mês é: " . $chave . " " . $mes . "<br>";
}

echo "<hr>";

if (isset($_GET)) {

    foreach ($_GET as $key => $value) {
        echo "Nome do campo: " . $key . "<br>";
        echo "Valor do campo: " . $value;

        echo "<hr>";
    }
}
?>

<form action="">
<input type="text" name="nome">
<input type="date" name="nascimento">
<input type="submit" value="OK">
</form>
