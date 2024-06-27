<?php

$idade = 18;
$nacionalidade = 'brasileira';

if($idade >= 18 && $nacionalidade != 'brasileira') {
    echo 'Seja bem-vindo';
}elseif($idade < 18) {
    echo 'Você pecisa ter 18 anos ou mais';
}elseif($nacionalidade == 'brasileira') {
    echo 'Em breve estaremos chegando';
}else{
    echo 'Você não tem acesso';
}



if($idade >= 18 && $nacionalidade != 'brasileira') {
    echo 'Seja bem-vindo';
}
elseif($idade < 18) {
    echo 'Você pecisa ter 18 anos ou mais';
}
elseif($nacionalidade == 'brasileira') {
    echo 'Em breve estaremos chegando';
}
else{
    echo 'Você não tem acesso';
}

if($idade >= 18 && $nacionalidade != 'brasileira')
{
    echo 'Seja bem-vindo';
}elseif($idade < 18)
{
    echo 'Você pecisa ter 18 anos ou mais';
}elseif($nacionalidade == 'brasileira')
{
    echo 'Em breve estaremos chegando';
}else
{
    echo 'Você não tem acesso';
}


if($idade >= 18 && $nacionalidade != 'brasileira'):
    echo 'Seja bem-vindo';
elseif($idade < 18):
    echo 'Você pecisa ter 18 anos ou mais';
elseif($nacionalidade == 'brasileira'):
    echo 'Em breve estaremos chegando';
else:
    echo 'Você não tem acesso';
endif;

if (1 == 1) { echo '1 é igual a 1'; }