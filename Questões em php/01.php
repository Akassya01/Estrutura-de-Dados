<?php
$compra = 150;
$desconto = 0;

if ($compra > 100) {
    $desconto = $compra * 0.10;
}

$valorFinal = $compra - $desconto;
echo $valorFinal;

// outro teste
$compra = 80;
$desconto = 0;

if ($compra > 100) {
    $desconto = $compra * 0.10;
}

$valorFinal = $compra - $desconto;
echo "<br>" . $valorFinal;
?>