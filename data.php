<?php
echo date('d') . '/' . date('m') . '/' . date('Y') . '<hr>';

echo date('d/m/Y') . '<hr>';

echo time() . '<hr>';

$agora = time();
$prazo = time() + (60*60*24) * (30);
echo $prazo . '<br>';
echo date('d/m/Y', $prazo) . '<hr>';
$fim_do_mundo =  mktime(0, 0, 0, 12, 21, 2012);
echo $fim_do_mundo . '<br>';
$fim_do_mundo_segundos = $fim_do_mundo - time();
echo date('d/m/Y', $fim_do_mundo) . '<hr>';
echo 'Faltam ' . number_format($fim_do_mundo_segundos, 0, ',', '.') . ' segundos para o fim do mundo';
