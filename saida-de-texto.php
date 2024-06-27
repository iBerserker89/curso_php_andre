<?php
    echo 'Olá, mundo';

    echo 'Ola mundo ' . '!!';

    $var = 'Novo';

    echo '<br>';


    echo 'Ola $var mundo ' . '!!';

    echo '<br>';

    echo  "Ola $var mundo !!";

    // aspas duplas permite que use variáveis dentro de uma string

// a recomendação é usar aspas simples e concatenar as variáveis

// \n só funciona com aspas duplas

    echo 'Ola ' . "\n" . 'Mundo' . $var;

    // html tem que ser com aspas simples
    echo '<a href="saida-de-texto.php"></a>';
