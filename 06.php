<?php
$vendas = 8000;

if ($vendas <= 10000) {
    $comissao = $vendas * 0.05;
} else {
    $comissao = $vendas * 0.07;
}

echo $comissao;

echo "<br>";

$vendas = 15000;

if ($vendas <= 10000) {
    $comissao = $vendas * 0.05;
} else {
    $comissao = $vendas * 0.07;
}

echo $comissao;
?>
