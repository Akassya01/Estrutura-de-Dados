<?php
$assinante = true;
$pagamento = false;

if ($assinante && $pagamento) {
    echo "Acesso liberado";
} else {
    echo "Acesso negado";
}
?>