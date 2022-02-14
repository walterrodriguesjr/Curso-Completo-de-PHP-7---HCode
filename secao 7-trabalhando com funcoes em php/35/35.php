<?php

function soma(int...$valores)
{
    return array_sum($valores) . "<hr>";
}

echo soma(2, 2);
echo soma(2, 28);
echo soma(1.1, 4.6);
