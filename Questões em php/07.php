<?php
$meta = true;
$faltas = 1;

if ($meta && $faltas <= 2) {
    echo "Recebe bônus";
} else {
    echo "Não recebe bônus";
}

echo "<br>";

$meta = true;
$faltas = 3;

if ($meta && $faltas <= 2) {
    echo "Recebe bônus";
} else {
    echo "Não recebe bônus";
}
?>