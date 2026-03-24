<?php
$senhaCadastrada = 1234;
$senhaDigitada = 1234;

if ($senhaDigitada == $senhaCadastrada) {
    echo "Acesso liberado";
} else {
    echo "Acesso negado";
}

echo "<br>";

$senhaDigitada = 4321;

if ($senhaDigitada == $senhaCadastrada) {
    echo "Acesso liberado";
} else {
    echo "Acesso negado";
}
?>