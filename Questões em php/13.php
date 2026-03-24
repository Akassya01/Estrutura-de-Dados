<?php
$v1 = 1200;
$v2 = 800;
$v3 = 1500;

$maior = $v1;

if ($v2 > $maior) {
    $maior = $v2;
}

if ($v3 > $maior) {
    $maior = $v3;
}

echo $maior;
?>