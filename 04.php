<?php
$compra = 1200;

if ($compra > 1000) {
    echo "Cliente Ouro";
} elseif ($compra >= 500) {
    echo "Cliente Prata";
} else {
    echo "Cliente Bronze";
}

echo "<br>";

$compra = 750;

if ($compra > 1000) {
    echo "Cliente Ouro";
} elseif ($compra >= 500) {
    echo "Cliente Prata";
} else {
    echo "Cliente Bronze";
}

echo "<br>";

$compra = 300;

if ($compra > 1000) {
    echo "Cliente Ouro";
} elseif ($compra >= 500) {
    echo "Cliente Prata";
} else {
    echo "Cliente Bronze";
}
?>