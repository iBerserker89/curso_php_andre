<?php
// echo date('d/m/Y');

$dias_da_semana = array('Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado');

$meses = array(
    'Janeiro', 'Fevereiro', 'Março',
    'Abril', 'Maio', 'Junho',
    'Julho', 'Agosto', 'Setembro',
    'Outubro', 'Novembro', 'Dezembro',
);

echo $dias_da_semana[date('w')] . ', ' . date('d') . ' de ' . $meses[date('m')-1] . ' de ' . date('Y');
