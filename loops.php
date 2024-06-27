<?php
    for ($i = 0 ; $i < 10 ; $i++) {
        echo 'i é igual a ' . $i . '<br>';
    }

    for ($i = 10 ; $i > 0 ; $i--) {
        echo 'i é igual a ' . $i . '<br>';
    }

    $i = 0;
    while($i < 10) {
        echo 'i aparece ' . $i . ' vezes' . '<br>';
        $i++;
    }
     echo 'do while';
    $i = 100;
    do {
        echo 'i é igual a ' . $i . '<br>';
        $i--;
    }while ($i > 0);