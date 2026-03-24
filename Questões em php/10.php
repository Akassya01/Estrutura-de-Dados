<?php
$valor = 250;
$vip = false;

if ($valor >= 200) {
    echo "Frete grátis";
} elseif ($vip) {
    echo "Frete 10";
} else {
    echo "Frete 20";
}

echo "<br>";

$valor = 150;
$vip = true;

if ($valor >= 200) {
    echo "Frete grátis";
} elseif ($vip) {
    echo "Frete 10";
} else {
    echo "Frete 20";
}

echo "<br>";

$valor = 150;
$vip = false;

if ($valor >= 200) {
    echo "Frete grátis";
} elseif ($vip) {
    echo "Frete 10";
} else {
    echo "Frete 20";
}
?>