<?php
function traduz_data($idioma) {
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

    switch ($idioma) {
        case 'en':
            return $months;
            break;
        case 'pt-br':
            return $meses;
            break;
        default:
            return '';
    }
}