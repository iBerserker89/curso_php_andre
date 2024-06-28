<?php
// Toda vez que for reutilizar um código, este código deve estar dentro de uma função.
// Um função nunca deve fazer mais de uma coisa ao mesmo tempo, pra cada ação é preciso uma função diferente.

function texto_em_negrito($texto, $quebra = '<br>') {
    return '<strong>' . $texto . '<strong>' . $quebra;
};

echo texto_em_negrito('Oi');
echo texto_em_negrito('tudo');
echo texto_em_negrito('bem');
echo texto_em_negrito('como');
echo texto_em_negrito('vai');
