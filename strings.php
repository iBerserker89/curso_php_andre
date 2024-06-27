<?php

$texto = 'o rato roeu a roupa do rei de roma.  ';


// contagem
echo strlen($texto);
echo '<br>';
echo substr_count($texto, 'r');
echo '<br><br><br>';

// localização
echo substr($texto, 0, 4);
echo '<br>';
echo strpos($texto, 'r');
echo '<br>';
echo strrpos($texto, 'r');
echo strrpos($texto, 'R');
echo '<br>';
echo strripos($texto, 'r');
echo '<br><br><br>';

// substituição
echo str_replace('rato', 'leao', $texto);
echo '<br>';
echo str_ireplace('r', 's', $texto);
echo '<br><br><br>';

// modificação
echo rtrim($texto);
echo '<br>';
echo ltrim($texto);
echo '<br>';
echo ltrim($texto);
echo '<br>';
echo strtoupper($texto);
echo '<br>';
echo strtolower($texto);
echo '<br>';
echo ucfirst($texto);

