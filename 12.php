<?php
$idade = 20;
$doc = true;
$cadastro = false;

if ($idade >= 18 && $doc && $cadastro) {
    echo "Pode entrar";
} else {
    echo "Não pode entrar";
}
?>