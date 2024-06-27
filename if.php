<?php

$idade = 18;

if ($idade >= 18) {
    echo 'Você é´maior de idade';
}

/*
 * == igualdade
 * != desigualdade
 * > maio que
 * < menor que
 * <= menor ou igual a
 */

echo '<br><br><br>';

$nacionalidade = 'brasileira';

if ($idade >= 18 && $nacionalidade != 'brasileira') {
    echo 'Seja bem-vindo';
} else {
    echo 'Você não trem acesso';
}

if ($idade >= 18 && $nacionalidade != 'brasileira') {
    echo 'Seja bem-vindo';
}else if ($idade < 18) {
    echo 'Você pecisa ter 18 anos ou mais';
} else if ($nacionalidade == 'brasileira') {
    echo 'Em breve estaremos chegando';
} else {
    echo 'Você não tem acesso';
}

$verdade = true;
if (!$verdade) {
    echo 'Não é verdade';
}

