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

echo '<br><br><br>';

echo '<pre>';
print_r($meses);
print_r($meses[0]);
echo '</pre>';

echo '<br><br><br>';

echo '<pre>';
var_dump($meses);
var_dump($meses[1]);
echo '</pre>';

