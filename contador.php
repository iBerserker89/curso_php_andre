<?php
$fim_do_mundo =  mktime(0, 0, 0, 12, 21, 2012);
$fim_do_mundo_segundos = $fim_do_mundo - time();

function data_por_extenso($time, $idioma) {
    $dias_da_semana = array('Domingo', 'Segunda', 'Terça', 'Quarta', "Quinta", 'Sexta', 'Sábado');
    $meses = array(
        'Janeiro',
        'Fevereiro',
        'Março',
        'Abril',
        'Maio',
        'Junho',
        'Julho',
        'Agosto',
        'Setembro',
        'Outubro',
        'Novembro',
        'Dezembro',
    );

    $months = array(
        'January',
        'February',
        'March',
        'April',
        'May',
        'June',
        'July',
        'August',
        'September',
        'October',
        'November',
        'December',
    );

    if ($idioma == 1) {
        $language = $meses;
        return date('d', $time) . ' de ' . $language[date('m', $time)-1] . ' de ' . date('Y', $time);
    } elseif ($idioma == 2) {
        $language = $months;
        return $language[date('m', $time)-1] . ', ' . date('d', $time) . ' of ' . date('Y', $time);
    } else {
        return 'Escolha o idioma: "1" para "português" / "2" para "inglês".';
    }
}

echo data_por_extenso($fim_do_mundo, 3);
echo '<br>';
echo 'Faltam ' . number_format($fim_do_mundo_segundos, 0, ',', '.') . ' segundos para o fim do mundo';