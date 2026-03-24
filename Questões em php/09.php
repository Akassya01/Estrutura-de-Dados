<?php
$estoque = 10;
$ativo = true;

if ($estoque > 0 && $ativo) {
    echo "Pode vender";
} else {
    echo "Não pode vender";
}

echo "<br>";

$estoque = 0;
$ativo = true;

if ($estoque > 0 && $ativo) {
    echo "Pode vender";
} else {
    echo "Não pode vender";
}
?>