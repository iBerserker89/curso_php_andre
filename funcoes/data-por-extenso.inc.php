<?php
require_once 'traduz-data.inc.php';
function data_por_extenso($time, $idioma){

    $traducao = traduz_data($idioma);

    if ($idioma == 'pt-br') {
        return date('d', $time) . ' de ' . $traducao[date('m', $time) - 1] . ' de ' . date('Y', $time);
    } elseif ($idioma == 'en') {
        return $traducao[date('m', $time) - 1] . ', ' . date('d', $time) . ' of ' . date('Y', $time);
    } else {
        return 'Escolha um idioma: "en" para inglês e "pt-br" para português';
    }
}