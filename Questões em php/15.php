<?php
$compra = 200;
$vip = true;
$inadimplente = true;

if (($compra > 300 || $vip) && !$inadimplente) {
    echo "Ganha desconto";
} else {
    echo "Não ganha desconto";
}
?>