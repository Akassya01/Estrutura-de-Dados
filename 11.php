<?php
$pontos = 95;

if ($pontos >= 90) {
    echo "Excelente";
} elseif ($pontos >= 70) {
    echo "Bom";
} elseif ($pontos >= 50) {
    echo "Regular";
} else {
    echo "Insuficiente";
}
?>