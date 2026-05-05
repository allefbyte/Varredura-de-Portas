<?php

$porta = 1;

while ($porta <= 20) {

    // Regra 2: parar tudo ao chegar na porta 18
    if ($porta == 18) {
        echo "Varredura interrompida por segurança na porta 18";
        break;
    }

    // Regra 1: pular múltiplos de 5
    if ($porta % 5 == 0) {
        $porta++;
        continue;
    }

    // Verificação normal
    echo "A verificar porta $porta <br>";

    $porta++;
}

?>