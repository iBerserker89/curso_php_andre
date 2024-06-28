<?php

// Só usar caso seja extremamente necessário.

$texto = 'oi';
function imprime_texto() {
    global $texto;
    $texto = 'Oi mundo';
}

imprime_texto();

echo $texto;